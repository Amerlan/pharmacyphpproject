<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\books;
use App\Mail\new_notification;
use App\subscriptionlist;
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

    public function notify_all()
    {
      // , ['verified', 1]
      $emails = subscriptionlist::where('notify', 1)->get();
      $book = books::all()->take(-1);
      foreach ($emails as $email) {
          Mail::to($email)->send(new new_notification($book));
        }
    }

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
    $books->source = $request->source;
    $books->price = $request->price;
    $books->save();
    $this->notify_all();

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
