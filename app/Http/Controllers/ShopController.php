<?php
use GuzzleHttp\Client;
namespace App\Http\Controllers;
use App\books;
use App\cart;
use App\subscriptionlist;
use App\orders;
use Mail;
use App\Mail\senderclass;
use App\Mail\sendInvoice;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



class ShopController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index()
    {
        $data = books::paginate(6);

        return view('/shop',['data' =>$data, 'select' => 6]);
    }

    public function show(Request $req)
    {
      $data = books::paginate($req->select);
      $select = $req->select;
      return view('/shop',['data' => $data, 'select' => $select]);
    }


    public function store(Request $request)
    {
      $req = $request;

        return view('payment',compact('req'));
    }


    public function placeOrder(Request $request)
    {

        $url = "https://api.post.kz/api/byOldPostcode/".strval($request->post)."?from=0";
        $response = Http::get($url);
        $temp = 0;
        try {
            $info = $response->json()['data'][$temp]['address'];
            while ($info===''){
                $temp += 1;
                $info = $response->json()['data'][$temp]['address'];
            }
        } catch (\Exception $e) {
          $info = 'Post code error';
        }

        $order = new orders;

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        $order->customer_id = Auth::user()->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->email = Auth::user()->email;
        $order->address = $request->address;
        $order->postcode = $request->post;
        $order->bill = $cart->totalprice;
        $order->phone_number = $request->phone;
        $order->comment = $request->comm;

        $order->save();
        $orderinfo = orders::where('customer_id', Auth::user()->id)->orderBy('id', 'desc')->first(['id','fname','lname','address','bill']);

        Mail::to(Auth::user()->email)->send(new senderclass($orderinfo, $cart->items));
        Mail::to(Auth::user()->email)->send(new sendInvoice($orderinfo, $cart->items, $request->card));

        Session::forget('cart');
        return view('/confirm', ['data'=>$orderinfo, 'response'=>$info]);
    }


    public function addToCart(Request $request, $id)
    {
      $item = books::find($id);
      $oldcart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new cart($oldcart);
      $cart->add($item, $item->id);

      $request->session()->put('cart',$cart);


      return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
      $item = books::find($id);
      $oldcart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new cart($oldcart);
      $cart->delete($item, $item->id);

      $request->session()->put('cart',$cart);
      return redirect()->back();
    }


    public function getCart()
    {
        if (!Session::has('cart')){
          return view('cart', ['products'=>null]);
        }

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);
        return view('cart',['products' => $cart->items, 'totalprice' =>$cart->totalprice]);
    }

    public function checkout()
    {
        if (!Session::has('cart')){
          return view('cart', ['products'=>null]);
        }

        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        return view('checkout',['products' => $cart->items, 'totalprice' =>$cart->totalprice]);
    }

    public function search(Request $req)
    {
      $book = books::where('title', 'like', $req->search.'%')
                    ->orWhere('author', 'like', $req->search.'%')->paginate(5);
      if (!$req->search) {
        return $this->index();
      }
      return view('shop',['data' =>$book, 'select' => 6]);
    }

    public function clear()
    {
      Session::forget('cart');
      return redirect()->back();
    }

}
