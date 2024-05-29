<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'description' => 'nullable',
            'thumb' => 'required|',
            'price' => 'required',
            'series' => 'required|min:5',
            'sale_date' => 'required',
            'type' => 'required',
        ];
    }

    //se non creiamo questa funzione allora prenderà in automatico i messaggi di default
    public function messages()
    {
        return [
            'title.required' => 'Inserisci il titolo',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'thumb.required' => 'Inserisci un immagine',
            'price.required' => 'Inserisci un prezzo',
            'series.required' => 'Inserisci la serie',
            'sale_date.required' => 'Inserisci la data',
            'type.required' => 'Inserisci il tipo',
        ];
    }
}
