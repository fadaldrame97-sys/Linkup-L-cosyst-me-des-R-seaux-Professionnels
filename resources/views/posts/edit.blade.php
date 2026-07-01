@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-2xl font-bold mb-6">
        Modifier la publication
    </h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Contenu
            </label>

            <textarea
                name="content"
                rows="5"
                class="w-full border rounded-lg p-3">{{ old('content', $post->content) }}</textarea>

            @error('content')
                <p class="text-red-500 mt-2">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
            Mettre à jour
        </button>

        <a
            href="{{ route('feed') }}"
            class="ml-4 text-gray-600">
            Annuler
        </a>

    </form>

</div>

@endsection