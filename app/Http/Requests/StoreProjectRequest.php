<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name'=> 'required|max:100',
            'description'=> 'nullable',
            'thumb'=> 'nullable|file|max:1024',
            'git_url'=> 'required|url',
            'type_id' => 'required|exists:types,id',
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Il nome deve essere inserito',
            'name.max' => "Il nome deve avere massimo :max caratteri",
            'thumb.file' => "Il file deve essere un'immagine",
            'thumb.max' => "La dimensione del file non deve superare i 1024 KB",
            'git_url.required' => "Il link alla repo di GitHub deve essere inserito",
            'git_url.url' => "Il link alla repo di GitHub deve essere un URL valido",
            'type_id.required' => 'devi selezionare almeno un valore',
        ];
    }
}
