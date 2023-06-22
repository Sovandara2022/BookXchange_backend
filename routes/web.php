<?php

use Illuminate\Support\Facades\Route;
use Illuminate\resources\asserts\img;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
// use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\Acc_profileController;
use App\Http\Controllers\User_bannedsController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ROute admin login

Route::post('/adminRegister', [AdminController::class, 'adminRegister']);
Route::get('/', function () {
    return view('home');
});

Route::post('/adminLogin', [AdminController::class, 'adminLogin']);
Route::get('/login', function () {
    return view('login');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/post', function () {
    return view('post');
});
// Route::get('/sort',function(){
//     return view('sort');
// });
Route::get('/sort', function () {
    return view('sort');
});

// Route::get('/banned', function () {
//     return view('banned');
// });


Route::get('/signup', function () {
    return view('register');
});

Route::get('/post_book', function () {
    return view('post_book');
});

Route::get('/books', [BookController::class,'List_book']);
// Route::post('/books', [BookController::class,'store']);


// Route::get('/Super', function () {
//     return view('supervisor');
// });

Route::get('/index', [UserlistController::class,'index'])->name('index');
// Route::get('/index', [UserlistController::class,'index']);


// Route::get('/user_banned', [User_bannedsController::class, 'banned']);
Route::get('/user_banned', [UserlistController::class, 'banned'])->name('user.user_banned');

//------Best_USER----------------------------------------------------
Route::get('/best_user', [UserlistController::class,'best'])->name('user.best_user');


//-------Supervisor------------------------



Route::get('/books', function () {
    return view('book_index');
});



// Route::get('/total', function () {
//     return view('total_user');
// });



   //---------Banned and Unban methods----------------------------------------------------------------
Route::put('/user/ban/{user_id}', [UserlistController::class, 'banUser'])->name('user.ban');
// Route::get('/user_banned', [UserlistController::class, 'banned'])->name('user.user_banned');
Route::put('/user/unban/{user_id}', [UserlistController::class, 'unbanUser'])->name('user.unban');






//------------delete--------------------------------
Route::delete('/user/{user_id}', [UserlistController::class, 'deleteUser'])->name('user.delete');


// -----Sorting by name (alphabet order)----------------
Route::get('/userlist', [UserlistController::class, 'index'])->name('user.index');
Route::get('/books', [BookController::class, 'List_book'])->name('user.book_index');
Route::get('/user_banned', [UserlistController::class, 'banned'])->name('user.user_banned');
Route::get('/best_user', [UserlistController::class, 'best'])->name('user.best_user');



//------Search functions--------------------------------
// Route::get('/user/search', [UserlistController::class, 'search'])->name('user.search');
// Route::get('/user/search_id', [UserlistController::class, 'search_id'])->name('user.search_id');

Route::get('/user/user_id}', [UserlistController::class, 'show']);

//------Users Profile----------------------------------------------------
Route::get('/profile/{user_id}', [UserprofileController::class,'displayData']);

//------Admin or Supervisor Profile----------------------------------------------------
Route::get('/Acc_pro', [Acc_profileController::class,'Acc_pro']);



//---------------Detail----------------------------------------------------
//Route::get('/user/detail/{user_id}', 'UserlistController@detail')->name('name.detail');

Route::get('/user/detail/{user_id}', [UserlistController::class, 'detail'])->name('name.detail');


// Route::get('/user/detail/{user_id}', [UserlistController::class, 'detail'])->name('user.detail');

// Route::get('/user/detail/{user_id}', [UserlistController::class, 'detail'])->name('user.detail');


//--------------Totals --------------------------------
// Route::get('/total_user', [UserlistController::class, 'totalUsers'])->name('user.total_user');
Route::get('/total', [UserlistController::class, 'total_user'])->name('user.total_user');

// Route::get('user/detail/{user_id}', 'UserController@detail')->name('user.detail');
// Route::get('/user/detail/{user_id}', [UserlistController::class, 'detail'])->name('user.detail');
// Route::get('/user/detail/{user_id}', [UserController::class, 'detail'])->name('user.detail');

Route::get('/user/search', [UserlistController::class, 'search'])->name('user.search');


Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor');
// routes/web.php


use App\Http\Controllers\SupervisorController;

Route::get('/supervisor', [SupervisorController::class, 'super'])->name('supervisor');
