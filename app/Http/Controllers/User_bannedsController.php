<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User_banned;
class User_bannedsController extends Controller
{
   
      
    
    public function banned()
    {
       
            $bannedUsers = DB::table('user_banned')->where('is_banned', true)->get();
            return view('user_banned', compact('bannedUsers'));
        }
//         public function up()
// {
//     Schema::table('user_banned', function (Blueprint $table) {
//         $table->boolean('is_banned')->default(false);
//     });
}

        // $users = User_banned::orderBy('name')->get();
        // return view('user_banned', compact('users'));
    

