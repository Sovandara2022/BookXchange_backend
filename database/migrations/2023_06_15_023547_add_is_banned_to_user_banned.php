<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsBannedToUserBanned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::table('user_banned', function (Blueprint $table) {
    //         $table->string('image ')->nullable();
    //         $table->integer('id')->nullable();
    //        $table->string('name');
    //        $table->string('email ');
    //        $table->integer('phone ');
    //        // $table->string('posted_book_img')->nullable();
    //        $table->timestamps();

    //     });
    // }
    public function up()
    {
        Schema::create('user_banned', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->increments('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_banned', function (Blueprint $table) {
            //
        });
    }
}
