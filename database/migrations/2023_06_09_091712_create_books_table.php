<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('book_list', function (Blueprint $table) {
            // $table->id();
            $table->integer('book_id');
            $table->binary('book_image')->nullable();
            $table->string('book_title');
            $table->string('book_authur');
            $table->string('book_genre');
           
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_list');
    }
}

