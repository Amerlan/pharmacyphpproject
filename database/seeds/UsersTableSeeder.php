<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name'=>'MainBober',
        'email'=>'amerlan-t@bk.ru',
        'password'=>bcrypt('12345678'),
        'role_id'=>'1',
      ]);

      DB::table('users')->insert([
        'name'=>'User',
        'email'=>'user@gmail.com',
        'password'=>bcrypt('12345678'),
        'role_id'=>'2',
      ]);
    }
}
