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

        if(Auth::user()->following->contains($user->id)){
            Auth::user()->following()->detach($user->id);

        }
        else{

          Auth::user()->following()->attach($user->id);

        }
        return redirect()->route('feed');

    }
    
}
