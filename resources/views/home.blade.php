@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto text-center mt-20">

    <h1 class="text-5xl font-bold text-blue-600 mb-6">
        Bienvenue sur LinkUp
    </h1>

    <p class="text-gray-600 text-lg mb-10">
        Connectez-vous avec des professionnels, partagez vos idées
        et développez votre réseau.
    </p>

{{-- 
<div class="space-x-4">

    <a href="{{ route('login.form') }}"
       class="bg-blue-600 text-white px-6 py-3 rounded-lg">
        Se connecter
    </a>

    <a href="{{ route('register.form') }}"
       class="bg-green-600 text-white px-6 py-3 rounded-lg">
        S'inscrire
    </a>

</div>
--}}

</div>

@endsection