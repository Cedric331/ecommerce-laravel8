<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
      return [
         'name' => 'required|unique:products|max:255',
         'description' => 'required|max:500',
         'price' => 'required|between:0,99.999',
         'imageFile' => 'required',
         'imageFile.*' => 'image|mimes:jpeg,png,jpg|max:2048'
     ];
    }

      /**
       * Get the error messages for the defined validation rules.
       *
       * @return array
       */
      public function messages()
      {
          return [
              'name.required' => 'Le nom est requis',
              'name.unique' => 'Le nom existe déjà',
              'name.max' => 'Le nom ne peut pas avoir plus de 255 caractères',
              'description.max' => 'La description ne peut pas avoir plus de 500 caractères',
              'description.required' => 'La description est requise',
              'price.required' => 'Le prix est requis',
              'price.between' => 'Le prix est incorrect',
              'imageFile.required' => 'Il est obligatoire de mettre au moins une image',
              'imageFile.*.mimes' => 'Le format doit être jpg ou png',
              'imageFile.*.image' => 'Vous devez télécharger une image',
          ];
      }
}
