<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        Auth::user()->update($request->validated());

        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profil mis à jour avec succès.');
    }

    public function show()
    {
    $user = Auth::user();

    return view('profile.show', compact('user'));
    }
}