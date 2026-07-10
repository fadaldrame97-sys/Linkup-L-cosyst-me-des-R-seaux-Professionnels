<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class NetworkController extends Controller
{

       public function toggle(User $user)
    {
        if(Auth::id()==$user->id)  return redirect()->route('feed');

        
    }
    
}
