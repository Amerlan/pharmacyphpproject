<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
class bookaddcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('additem');   // прогружаем страницу с формой добавления книги
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     // Это должно быть внесение в БД но оно чет не робит, ошибки тоже не дропает
    public function store(Request $request)
    {
      $this->validate($request,[
      'title'=>'required',
      'author'=>'required',
      'url'=>'required',
      'price'=>'required',
    ]);
    $books = new books;
    $books->title = $request->title;
    $books->author = $request->author;
    $books->url = $request->url;
    $books->url2 = $request->url2;
    $books->price = $request->price;
    $books->save();
    return redirect('shop');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
