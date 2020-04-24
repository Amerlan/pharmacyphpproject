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

Route::post('/order', [
  'uses' => 'ShopController@placeOrder',
  'as' => 'order'
]);

Route::get('add_to_cart/{id}', [
  'uses' => 'ShopController@addToCart',
  'as' => 'product.add'
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
  Route::post('/senddiscount', "mailcontroller@discount");
  Route::get('/success', function (){return view('success');});

});
