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

@endforeach

@endsection