<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRegistros extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            // Definir las reglas de validación aquí
            'txtIsbn'=>'required|min:13',
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'txtPagina'=>'required|numeric',
            'txtEditorial'=>'required',
            'txtEmail'=>'required|email',
            
            
        ];
    }
}
