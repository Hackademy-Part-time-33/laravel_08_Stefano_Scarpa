<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
     * @return array<string
     * \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'years' => 'nullable|integer',
            'pages' => 'integer|nullable',
            'image' => 'nullable'
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.require' => 'Il titolo è obbligatorio',
            'years.integer' => 'Inserisci l anno',
            'pages.integer' => 'Inserisci le pagine',

        ];
    }
}
