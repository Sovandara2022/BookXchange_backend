<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserList;

use App\Models\UserPro;

use App\Models\Supervisor;

class UserlistController extends Controller
{
 
   

    public function index()
    {
        // $userlist = UserList::all();
        // return view('index', compact('userlist'));
       
        $userlist = UserList::orderBy('name')->get();
        return view('index', compact('userlist'));
    
    }
    public function super()
    {
        $users = UserList::all(); // Fetch all users from the UserList model
        return view('supervisor', compact('users'));
    }

public function total_user()
{
    $users = UserList::orderBy('name')->get();
    return view('total_user', compact('users'));
}



    public function detail($user_id)
{
    $user = UserList::findOrFail($user_id);
    return view('user_detail', compact('user'));
}


public function search(Request $request)
{
    $searchTerm = $request->input('search');
    
    $userlist = UserList::where('name', 'like', $searchTerm . '%')
                        ->orWhere('user_id', 'like', $searchTerm . '%')
                        ->orderBy('name')
                        ->get();
    
    return view('search', compact('userlist'));
}


    public function banUser(Request $request, $user_id)
    {
        $user = UserList::findOrFail($user_id);
        $user->is_banned = true;
        $user->save();
        
        return redirect()->back()->with('success', 'User banned successfully.');
    }

    
public function banned()
{
    // $bannedUsers = DB::table('user_list')->orderBy('name')->get();

    //     $bannedUsers = DB::table('user_list')->where('is_banned', true)->get();
    $bannedUsers = DB::table('user_list')->where('is_banned', true)->orderBy('name')->get();
    
        return view('user_banned', compact('bannedUsers'));
    }
     
    public function best()
{
    // $bestUsers = DB::table('user_list')->orderBy('name')->get();

    //     $bestUsers = DB::table('user_list')->where('is_banned', false)->get();
    $bestUsers = DB::table('user_list')->where('is_banned', false)->orderBy('name')->get();
   
        return view('best_user', compact('bestUsers'));
    }


    public function displayData()
    {
        // dd(1);
        
        $users =UserList::all();
       
        
        return view('profile', compact('users'));
    }
    

    // public function Acc_pro(Request $request)
    // {
    //     // dd(1);
        
    //     $acclog = Userpro::find($request->id);
    //     return view('acc_profile', compact('acclog'));
        
    // }

    public function unbanUser(Request $request, $user_id)
    {
        $user = UserList::findOrFail($user_id);
        $user->is_banned = false;
        $user->save();
        
        return redirect()->back()->with('success', 'User unbanned successfully.');
    }
    public function deleteUser(Request $request, $user_id)
{
    $user = UserList::findOrFail($user_id);
    $user->delete();
    
    return redirect()->back()->with('success', 'User deleted successfully.');
}


}




