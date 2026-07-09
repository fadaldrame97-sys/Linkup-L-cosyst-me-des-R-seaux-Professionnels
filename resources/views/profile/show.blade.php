```blade
@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-lg shadow p-6">

    <div class="flex items-center gap-6">

        <img
            src="{{ asset($user->image_url) }}"
            alt="Photo de profil"
            class="w-28 h-28 rounded-full border object-cover">

        <div>

            <h2 class="text-3xl font-bold">
                {{ $user->name }}
            </h2>

            <p class="text-gray-600 mt-1">
                {{ $user->headline }}
            </p>

            <p class="text-gray-600">
                {{ $user->company }}
            </p>

            <p class="text-gray-500">
                {{ $user->email }}
            </p>

        </div>

    </div>

    <div class="mt-8">

        <a
            href="{{ route('profile.edit') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded">

            Modifier mon profil

        </a>

    </div>

</div>

@endsection
```
