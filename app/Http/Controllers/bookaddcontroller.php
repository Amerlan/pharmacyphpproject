<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\books;
use App\Mail\new_notification;
use App\subscriptionlist;
class bookaddcontroller extends Controller
{
    public function index()
    {
        return view('additem');   // прогружаем страницу с формой добавления книги
    }

    public function notify_all()
    {

      $users = subscriptionlist::where('notify', 1)->get();
      $book = books::all()->take(-1);
      foreach ($users as $user) {
          Mail::to($user->email)->send(new new_notification($book,$user->token));
        }
    }

    public function create()
    {
        //
    }
     // Это должно быть внесение в БД но оно чет не робит, ошибки тоже не дропает
    public function store(Request $request)
    {

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
