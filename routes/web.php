<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\mailcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/', function()
{
  return redirect('/home');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', ['uses' => "ShopController@index", 'as' => 'shop']);
Route::post('/shop', ['uses'=>"ShopController@show", 'as'=>'shop']);


Route::get('/clear', ['uses' => 'ShopController@clear', 'as'=> 'clear']);

Route::post('/pay', ['uses'=>'ShopController@store', 'as'=>'store']);
Route::get('/pay', ['uses'=>'ShopController@store', 'as'=>'store']);

Route::get('/order', function(){
  return redirect('home');
});

Route::get('unsubscribe/{token}', [
  'uses' => 'mailcontroller@unsubscribe',
   'as' => 'unsub']);

Route::post('/order', [
  'uses' => 'ShopController@placeOrder',
  'as' => 'order'
]);

Route::get('add_to_cart/{id}', [
  'uses' => 'ShopController@addToCart',
  'as' => 'product.add'
]);
Route::get('delete_from_cart/{id}', [
  'uses' => 'ShopController@delete',
  'as' => 'product.delete'
]);

Route::get('cart', [
  'uses' => 'ShopController@getCart',
  'as' => 'product.shoppingcart'
]);

Route::get('checkout', [
  'uses' => 'ShopController@checkout',
  'as' => 'checkout'
]);

Route::post('/search', ['uses'=> 'ShopController@search', 'as' => 'search']);

Route::group(['middleware' => ['auth', 'admin'] ],
function()
{
  Route::get('/add','bookaddcontroller@index');
  Route::post('/store',['uses' => "bookaddcontroller@store", 'as' =>'add_book']);
});

Route::group(['middleware' => ['auth', 'customer'] ],
function()
{
  Route::post('/senddiscount', ['uses'=>"mailcontroller@subscribe",
                                'as' => 'discount']);
});
