<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre es requerido',
            'name.max' => 'Nombre no puede ser mayor a 55 caracteres',
            'username.required' => 'nombre de usuario es requerido',
            'username.unique' => 'Nombre de usuario ya existe',
            'email.required' => 'Email es requerido',
            'email.unique' => 'Email ya existe',
            'password.required' => 'contraseña es requerido',
            'password.confirmed' => 'contraseña no coincide',
            'password.min' => 'contraseña debe tener al menos 8 caracteres'
        ];
    }
}
