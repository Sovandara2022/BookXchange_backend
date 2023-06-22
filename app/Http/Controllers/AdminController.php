<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\UserList;
class AdminController extends Controller
{
    //
    public function adminLogin(Request $r)
    {
        $admin = Admin::where('email', $r->email)->where('password', bcrypt($r->password))->get();
        //dd($admin);
        if($admin == null)
         {
             return redirect('/login');

         }
         else
         {
            $userlist = UserList::orderBy('name')->get();
            return view('index', compact(['userlist', 'admin']));
         }
        
        // if($admin == null)
        // {
        //     return redirect('/login');
        
        // }
        // else
        // {
        //     return view('');
        // }
    }
    public function adminRegister(Request $r)
    {
        $admin = new Admin();
        $admin->name = $r->name;
        $admin->email = $r->email;
        $admin->password = bcrypt($r->password);
        $admin->status = 0;
        $admin->save();
        return redirect()->route('index');
    //     $r->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     try{
    //         Admin::create([
    //             'name' => trim($r->input('name')),
    //             'email' => strtolower($r->input('email')),

    //             'password' => bcrypt($r->input('password')),  // Password bcrypt
    //         ]);

    //         session()->flash('message', 'Your account is created');

    //     } catch (\Illuminate\Database\QueryException $e) {
    //         //report($e);
    //         session()->flash('message', 'Your registration is getting problem');

    //     }
    //     return redirect('/index');
    }

}
