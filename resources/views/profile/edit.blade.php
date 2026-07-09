```blade
@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-2xl font-bold mb-6">
        Modifier mon profil
    </h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Headline
            </label>

            <input
                type="text"
                name="headline"
                value="{{ old('headline', $user->headline) }}"
                class="w-full border rounded p-2">

            @error('headline')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Entreprise
            </label>

            <input
                type="text"
                name="company"
                value="{{ old('company', $user->company) }}"
                class="w-full border rounded p-2">

            @error('company')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block font-semibold mb-2">
                URL de l'image
            </label>

            <input
                type="text"
                name="image_url"
                value="{{ old('image_url', $user->image_url) }}"
                class="w-full border rounded p-2">

            @error('image_url')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded">
            Mettre à jour
        </button>

    </form>

</div>

@endsection
```
