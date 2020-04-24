<?php

namespace App\Http\Controllers;
use App\books;
use App\cart;
use App\orders;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

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
        $order = new orders;

        $order->customer_id = Auth::user()->id;
        $order->fname = $request->title;
        $order->lname = $request->title;
        $order->email = $request->Auth::user()->email;
        $order->address = $request->address;
        $order->postcode = $request->postcode;
        $order->phone_number = $request->phone_number;
        $order->comment = $request->comment;

        $order->save();
        return view('confirm');
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
