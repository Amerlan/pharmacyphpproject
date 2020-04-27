<?php
use GuzzleHttp\Client;
namespace App\Http\Controllers;
use App\books;
use App\cart;
use App\subscriptionlist;
use App\orders;
use Mail;
use App\Mail\senderclass;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = books::paginate(5);

        return view('/shop',compact('data'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //напиши сюда добавление в бд using admin
    }


    public function placeOrder(Request $request)
    {
        $url = "https://api.post.kz/api/byOldPostcode/".strval($request->postcode)."?from=0";
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
        $order->postcode = $request->postcode;
        $order->bill = $cart->totalprice;
        $order->phone_number = $request->phone_number;
        $order->comment = $request->comment;

        $order->save();
        $orderinfo = orders::where('customer_id', Auth::user()->id)->orderBy('id', 'desc')->first(['id','fname','bill']);

        Mail::to(Auth::user()->email)->send(new senderclass($orderinfo, $cart->items));

        Session::forget('cart');
        return view('/confirm', ['data'=>$orderinfo, 'response'=>$info]);
    }

    public function edit($id)
    {
        // edit data using admin
    }

     //ADD TO CART FUNCTION
    public function update(Request $request, $id)
    {
      // update bd books using admin
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



}
