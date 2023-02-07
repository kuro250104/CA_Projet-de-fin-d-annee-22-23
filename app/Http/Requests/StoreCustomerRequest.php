<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules() :array
    {
        return [
            'name' => 'required|regex:/^[A-Z]+$/i',
            'code' => 'required|regex:/^[A-Z]{2}$/i|uppercase|unique:customers,code'
        ];
    }

    public function messages(): array
    {
        return[
            'name.required'=> 'Veuillez saisir un nom.',
            'name.regex'=> 'Le nom ne doit pas contenir de chiffres.',
            'code.required'=> 'Veuillez saisir un code.',
            'code.regex'=> 'Veuillez saisir un code valide.',
            'code.uppercase'=> 'Le code doit être en MAJUSCULE.',
            'code.unique'=> 'Ce code est déjà utilisé',
        ];
    }
}
