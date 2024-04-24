<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'title' => 'required|max:30',
            'color' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Inserisci un nome valido',
            'title.max' => 'il titolo deve avere :max caratteri',
            'color.required'=> 'inserisci un colore valido'
        ];
    }
}
