<?php
use GuzzleHttp\Client;
namespace App\Http\Controllers;
use App\books;
use App\cart;
use App\orders;
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
        try {
            $info = $response->json()['data'][0]['address'];
        } catch (\Exception $e) {
          $info = 'Post code error';
        }

        $info = $response->json()['data'][0]['address'];
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
        $data = orders::where('customer_id', Auth::user()->id)->orderBy('id', 'desc')->first();
        Session::forget('cart');
        return view('/confirm', ['data'=>$data, 'response'=>$info]);
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
