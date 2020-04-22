<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\mailcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




#Route::post('/send', "mailcontroller@send");  // это не подключено, было создано для тестировки
#Route::post('/senddiscount', "mailcontroller@discount"); // тут рабочий вариант отправки письма. Обрати внимания что он POST.
#Route::get('/form', function (){return view('form');});  // это была форма для проверки отправки письма, она робит, но пока юзлес
#Route::get('/add',"bookaddcontroller@index");
#Route::post('/store',"bookaddcontroller@store");   // Про что я говорил. Роут тут POST а не GET

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
#Route::get('/success', function (){return view('success');});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth', 'admin'] ],
function()
{
  Route::get('/add','AdminController@index');
  Route::post('/store',"AdminController@store");
  Route::get('/shop','ShopController@index');
});

Route::group(['prefix'=>'customer', 'namespace'=>'Customer', 'middleware' => ['auth', 'customer'] ],
function()
{
  Route::get('/home','HomeController@index');
  Route::redirect('/add','/home');
  Route::get('/shop', "ShopController@index");
  Route::post('/senddiscount', "mailcontroller@discount");
  Route::get('/success', function (){return view('success');});
});
#Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change');
#Route::post('/change-password','Auth\ChangePasswordController@changepassword')->name('password.update');
