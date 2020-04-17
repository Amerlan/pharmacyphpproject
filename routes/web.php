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


Route::get('/home', "indexcontrol@index");
Route::get('/', "indexcontrol@index");
Route::get('/shop', "ShopController@index");
Route::post('/send', "mailcontroller@send");  // это не подключено, было создано для тестировки
Route::post('/senddiscount', "mailcontroller@discount"); // тут рабочий вариант отправки письма. Обрати внимания что он POST.
Route::get('/form', function (){return view('form');});  // это была форма для проверки отправки письма, она робит, но пока юзлес
Route::get('add',"bookaddcontroller@index");
Route::post('submitbook',"bookaddcontroller@store");   // Про что я говорил. Роут тут POST а не GET
Route::redirect('/senddiscount', "/home");      // После отправки сбщ не удивляйтесь, редайрект опять будет на хом пейдж
