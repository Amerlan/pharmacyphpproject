<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bookinfo;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // Это должно быть внесение в БД но оно чет не робит, ошибки тоже не дропает
    public function store(Request $request)
    {
      $this->validate($request,[
      'title'=>'required',
      'author'=>'required',
      'url'=>'required',
      'price'=>'required',
    ]);
    $books = new bookinfo;
    $books->title = $request->title;
    $books->author = $request->author;
    $books->url = $request->url;
    $books->price = $request->price;
    $books->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
