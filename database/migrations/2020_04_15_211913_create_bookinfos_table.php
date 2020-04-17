<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // Наша книга имеет айди, название, автора, урл - это по идее фотка должна быть, цену
     public function up()
     {
       Schema::create('books',function (Blueprint $table)
       {
         $table->bigIncrements('id');
         $table->string('title');
         $table->string('author');
         $table->binary('url');
         $table->integer('price');
       });
     }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
