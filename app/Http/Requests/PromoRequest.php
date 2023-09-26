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
            'nombre_promocion' => 'required|min:3',
            'precio_promocion' => 'required|numeric',
            'precio_oferta_promocion' => 'nullable|numeric',
            'servicios' => 'required',
        ];
        return $rules;
    }
}
