<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|numeric'

        ];
    }
    public function messages(){
        return [
            'name.required' => "Occhio! Ti sei scordato il titolo",
            'name.min' => 'Attenzione, il titolo deve essere di almeno 5 caratteri',
            'price.required' => "Occhio! Ti sei scordato il prezzo",
             'img.required' => "Occhio! L'immagine è obbligatoria",
            "img.image"=> "Attenzione a caricare solamente immagini",
        ];
    }
}
