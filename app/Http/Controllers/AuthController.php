<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function showRegisterForm(){

        return view('auth.register');
         //return 'OK';

    }

    public function showLoginForm(){

        return view('auth.login');

    }

    public function register(RegisterRequest $request)
    {
    $data = $request->validated(

    );
    

   //dd($request->validated());

     return redirect()->route('register.form')->with('success','Inscription réuissi');
    
    $user=User::create(attributes: [
        'name'=>$data['name'],
        'email'=>$data['email'],
        'password'=>Hash::make(value:$data['password'])

    ]);
      auth()->login($user);
     return redirect('/feed')->with('success', 'Bienvenue sur LinkUp !');

     }
    }
