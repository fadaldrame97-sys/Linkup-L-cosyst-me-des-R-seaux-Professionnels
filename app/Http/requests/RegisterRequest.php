<?php
namespace App\Http\Requests;


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'headline' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', 'min:8'],
        ];
    }
}