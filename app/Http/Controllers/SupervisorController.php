<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserList;
use App\Http\Controllers\UserlistController;


class SupervisorController extends Controller
{
    public function super()
    {
        $users = UserList::all(); // Fetch all users from the UserList model
        return view('supervisor', compact('users'));
    }
}

