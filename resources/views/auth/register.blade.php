@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-6 text-center">
        Créer un compte
    </h2>

    <form action="{{ route('register') }}" method="POST">

        @csrf

        <div class="mb-4">
            <label>Nom</label>
            <input
                type="text"
                name="name"
                class="w-full border p-2 rounded"
                value="{{ old('name') }}">
        </div>

        <div class="mb-4">
            <label>Email</label>
            <input
                type="email"
                name="email"
                class="w-full border p-2 rounded"
                value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label>Headline</label>
            <input
                type="text"
                name="headline"
                class="w-full border p-2 rounded"
                value="{{ old('headline') }}">
        </div>

        <div class="mb-4">
            <label>Mot de passe</label>
            <input
                type="password"
                name="password"
                class="w-full border p-2 rounded">
        </div>

        <div class="mb-6">
            <label>Confirmer le mot de passe</label>
            <input
                type="password"
                name="password_confirmation"
                class="w-full border p-2 rounded">
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded w-full">
            S'inscrire
        </button>

    </form>

</div>

@endsection