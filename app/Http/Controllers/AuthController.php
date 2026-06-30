<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    
    public function showLoginForm()
    {
        return view('auth.login');
    }

   
    public function register(RegisterRequest $request)
    {
      
        $data = $request->validated();

        
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $data['password'], 
        ]);

       
        Auth::login($user);

    
        return redirect('/feed')
            ->with('success', 'Bienvenue sur LinkUp !');
    }

    public function login(LoginRequest $request)
    {
      
        $credentials = $request->validated();

      
        if (Auth::attempt($credentials)) {

           
            $request->session()->regenerate();

            return redirect('/feed')
                ->with('success', 'Connexion réussie !');
        }

       
        return back()
            ->withErrors([
                'email' => 'Email ou mot de passe incorrect.',
            ])
            ->onlyInput('email');
    }

    
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}