<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert([
        'title'=>'Dont be the second',
        'author'=> 'J. London',
        'url'=> 'https://sun9-56.userapi.com/c855724/v855724156/21e475/8D5ps8FALgk.jpg',
        'source'=>'http://flibusta.is/b/33859/read',
        'price'=> 15,
    ]);

    DB::table('books')->insert([
      'title'=>'7 Навыков высокоэфективных людей',
      'author'=> 'S. Covee',
      'url'=> 'https://sun9-22.userapi.com/c855724/v855724156/21e47d/3LuKmtenp8o.jpg',
      'source'=> 'http://flibusta.is/b/554062/read',
      'price'=> 18,
  ]);

  DB::table('books')->insert([
    'title'=>'Abay Zholy',
    'author'=> 'M. Auezov',
    'url' => 'https://sun9-19.userapi.com/c855724/v855724156/21e485/IyXQiTpxxlg.jpg',
    'source' => 'http://flibusta.is/b/484939/read',
    'price'=> 35,
  ]);

  DB::table('books')->insert([
    'title'=>'Smth about thoughts',
    'author'=> 'N. Name',
    'url'=> 'https://sun9-14.userapi.com/c855724/v855724156/21e48d/Q74xxEvJ1zk.jpg',
    'source' => 'https://libcat.ru/knigi/detektivy-i-trillery/triller/178702-stephen-king-joyland.html',
    'price'=> 17,
]);

DB::table('books')->insert([
  'title'=>'Gravity Falls',
  'author'=> 'A. Hiersh',
  'url'=> 'https://sun9-23.userapi.com/c855724/v855724156/21e495/Mg8bm9XFwpU.jpg',
  'source' => 'https://read-comic.com/gravity-falls-lost-legends-tpb/',
  'price'=> 26,
]);

DB::table('books')->insert([
  'title'=>'Want and will be',
  'author'=> 'M. Labkovskiy',
  'url'=> 'https://sun9-5.userapi.com/c855724/v855724156/21e49d/yZ7ex0EDHDw.jpg',
  'source' => 'http://loveread.ec/read_book.php?id=67061&p=1',
  'price'=> 23,
]);

DB::table('books')->insert([
  'title'=>'Pofigism',
  'author'=> 'M. Manson',
  'url'=> 'https://sun9-27.userapi.com/c855724/v855724156/21e4a5/NFjebWa6UG4.jpg',
  'source' => 'http://loveread.ec/read_book.php?id=66688&p=1',
  'price'=> 37,
]);
    }
}
