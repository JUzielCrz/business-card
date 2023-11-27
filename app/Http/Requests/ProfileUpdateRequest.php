<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'current_password' => ['required', 'current_password'],
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'A title is required',
            'email.email' => 'El campo de correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo de correo electrónico no debe tener más de 255 caracteres..',
        ];
    }
}
