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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', "ShopController@index");


Route::get('/order', function(){
  return abort(404);
});

Route::get('unsubscribe/{token}', [
  'uses' => 'mailcontroller@unsubscribe',
   'as' => 'unsub']);
#Route::post('unsubscribe/{token}', 'mailcontroller@unsubscribe');

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


Route::group(['middleware' => ['auth', 'admin'] ],
function()
{
  Route::get('/add','bookaddcontroller@index');
  Route::post('/store',"bookaddcontroller@store");
});

Route::group(['middleware' => ['auth', 'customer'] ],
function()
{
  Route::post('/senddiscount', "mailcontroller@subscribe");
  Route::get('/success', function ()
  {
    return view('success');
  });

});
