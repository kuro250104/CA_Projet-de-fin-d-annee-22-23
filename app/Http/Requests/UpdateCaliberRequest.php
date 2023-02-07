<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCaliberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Renseignez un nom de calibre'
        ];
    }
}
