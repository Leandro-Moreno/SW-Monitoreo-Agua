<?php

namespace App\Http\Requests;

use App\Registro;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
{
    public $validator = null;
    protected function failedValidation($validator)
    {
      $this->validator = $validator;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'longitud' => ['required', 'between:-180,80'],
            'latitud' => ['required', 'between:-90,90'],
            'hg' => ['required', 'between:0,200'],
            'temperatura' => 'required',
            'od' => ['required'],
            'ph' => ['required'],
            'conduct' => ['required'],
        ];
    }
    /**
    * Custom message for validation
    *
    * @return array
    */
    public function messages()
    {
       return [
           'longitud.required' => 'La longitud es requerida!',
           'latitud.required' => 'La latitud es requerida!',
           'hg.required' => 'La hg es requerida!',
           'temperatura.required' => 'La temperatura es requerida!',
           'od.required' => 'La od es requerida!',
           'ph.required' => 'La ph es requerida!',
           'hg.required' => 'La hg es requerida!',
       ];
    }

}
