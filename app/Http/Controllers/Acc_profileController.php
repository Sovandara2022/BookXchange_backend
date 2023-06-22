<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Models\User;
use App\Models\Userpro;
class Acc_profileController extends Controller
{
    public function Acc_pro(Request $request)
    {
        // dd(1);
        
        $acclog = Userpro::find($request->id);
        return view('acc_profile', compact('acclog'));
        
    }
    
   
  
}
