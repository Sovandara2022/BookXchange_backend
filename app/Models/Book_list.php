<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_list extends Model
{
    protected $table = 'book_list';

    protected $fillable = [
        'book_id' ,
        'book_image',
        'book_title',
        'book_authur',
        'pbook_genre',
     
    ];
}
