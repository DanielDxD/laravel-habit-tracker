<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:60|string',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|min:6|max:60|string',
            'password_confirmation' => 'required|min:6|max:60|string|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter pelo menos 3 caracteres',
            'name.max' => 'O nome deve ter no máximo 60 caracteres',
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'O e-mail deve ser válido',
            'email.unique' => 'O e-mail já está cadastrado',
            'password.required' => 'A senha é obrigatória',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            'password.max' => 'A senha deve ter no máximo 60 caracteres',
            'password_confirmation.required' => 'A confirmação da senha é obrigatória',
            'password_confirmation.min' => 'A confirmação da senha deve ter pelo menos 6 caracteres',
            'password_confirmation.max' => 'A confirmação da senha deve ter no máximo 60 caracteres',
            'password_confirmation.same' => 'As senhas não coincidem',
        ];
    }
}
