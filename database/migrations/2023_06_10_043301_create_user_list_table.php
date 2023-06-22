<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_list', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('user_list', function (Blueprint $table) {
            // $table->id();
            // $table->binary('image')->nullable();
            // $table->integer('id')->nullable();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('phone')->nullable();
            // $table->boolean('is_banned')->default(false);
            // $table->timestamps();

            $table->user_id();
            $table->binary('image')->nullable();
            // $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('age')->nullable(); 
             $table->string('email'); 
             $table->boolean('is_banned')->default(false);
             $table->string('address')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->enum('province',['Banteay Meanchey',
            'Battambang',
            'Kampong Cham',
            'Kampong Chhnang',
            'Kampong Speu',
            'Kampong Thom',
            'Kampot',
            'Kandal',
            'Koh Kong',
            'Kratié',
            'Mondulkiri',
            'Phnom Penh',
            'Preah Vihear',
            'Prey Veng',
            'Pursat',
            'Ratanakiri',
            'Siem Reap',
            'Preah Sihanouk',
            'Stung Treng',
            'Svay Rieng',
            'Takéo',
            'Oddar Meanchey',
            'Kep',
            'Pailin',
            'Tboung Khmum']);
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_list');
    }
}
