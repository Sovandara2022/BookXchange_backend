<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('user_profile', function (Blueprint $table) {
        $table->user_id();
        $table->string('name');
        $table->integer('age');
        $table->string('address');
        $table->string('email');
        $table->string('phone');
        $table->string('password');
        $table->enum('gender', ['male', 'female', 'others']);
        $table->unsignedInteger('province');
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
        Schema::dropIfExists('user_profile');
    }
}
