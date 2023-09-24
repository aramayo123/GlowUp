<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoRequest extends FormRequest
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
        $rules =  [
            'nombre_promo' => 'required|unique:promociones|min:3',
            'precio' => 'required|number',
            'precio_promo' => 'required|number',
            'servicios' => 'required',
        ];
        return $rules;
    }
}
