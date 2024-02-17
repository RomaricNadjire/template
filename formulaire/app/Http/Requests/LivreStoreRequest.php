<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreStoreRequest extends FormRequest
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
            'titre'=>'required|min:3',
            'description'=>'required|min:15',
            'prixAchat'=>'required|numeric|min:0',
            'prixVente'=>'required|numeric|min:0',
            'auteur'=>'required|min:3',
            'couverture'=>'image|nullable',
        ];
    }

    /**
     * 
     * Get the validation messages that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'titre.required' => "Le champ 'titre' est obligatoire.",
            'titre.min' => "Le champ 'titre' doit contenir au moins 3 caractères.",
            'description.required' => "Le champ 'description' est obligatoire.",
            'description.min' => "Le champ 'description' doit contenir au moins 15 caractères.",
            'prixAchat.required' => "Le champ 'prixAchat' est obligatoire.",
            'prixAchat.numeric' => "Le champ 'prixAchat' doit être un nombre positif.",
            'prixAchat.min' => "Le champ 'prixAchat' doit être un nombre positif.",
            'prixVente.required' => "Le champ 'prixVente' est obligatoire.",
            'prixVente.numeric' => "Le champ 'prixVente' doit être un nombre positif.",
            'prixVente.min' => "Le champ 'prixVente' doit être un nombre positif.",
            'auteur.required' => "Le champ 'auteur' est obligatoire.",
            'auteur.min' => "Le champ 'auteur' doit contenir au moins 3 caractères.",
            'couverture.string' => "Le champ 'couverture' doit être une chaîne de caractères.",
        ];
    }

}
