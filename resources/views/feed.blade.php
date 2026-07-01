@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Toutes les publications</h1>

@foreach($posts as $post)

<div class="bg-white p-4 rounded-lg shadow mb-4">

    <img
        src="{{ asset($post->user->image_url) }}"
        alt="Photo de profil"
        class="w-20 h-20 rounded-full object-cover border border-gray-300">

    <h3 class="font-bold">{{ $post->user->name }}</h3>

    <p class="text-gray-500">{{ $post->user->headline }}</p>

    <p>{{ $post->content }}</p>

</div>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <textarea
        name="content"
        class="w-full border rounded p-2"
        placeholder="Exprimez-vous..."></textarea>

    <button
        class="bg-blue-600 text-white px-4 py-2 rounded mt-2">
        Publier
    </button>
</form>

@endforeach

@endsection