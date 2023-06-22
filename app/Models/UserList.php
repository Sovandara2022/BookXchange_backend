<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// class UserList extends Model
// {
//     protected $table = 'user_list';
//     protected $fillable = [
//         'image',
//          'name',
//           'email', 
//           'phone',
//           'Banned',
//     ];
// }


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserList extends Model
{
    use HasFactory;

    protected $table = 'user_list';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        // 'image',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'user_id',
        'name',
        'age',
        'address',
        'email',
        'phone',
        'gender',
        'province',
        'is_banned',
       
      
    ];

    public function ban()
    {
        $this->is_banned = true;
        $this->save();
    }

    public function unban()
    {
        $this->is_banned = false;
        $this->save();
    }
    
    

}



