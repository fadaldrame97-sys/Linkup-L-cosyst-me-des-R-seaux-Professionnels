<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;



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
    $data = $request->validated();

   //dd($request->validated());

     return redirect()->route('register.form')->with('success','Inscription réuissi');
    }
    }
