<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_id' => 'required',
            'number' => 'required'
        ];
    }

    public function messages(): array
    {
        return[
            'customer_id.required'=> 'Veuillez saisir un clients.',

            'number.required'=> 'Veuillez saisir un code.'
        ];
    }
}
