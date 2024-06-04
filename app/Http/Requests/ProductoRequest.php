<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'nombre' => 'required|unique:productos|max:255',
                    'descripcion' => 'max:250',
                    'precio' => 'required|numeric|min:0',
                    'stock' => 'required|integer|min:0',
                    'categoria_id' => 'required|exists:categorias,id',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'nombre' => 'required|unique:productos,nombre,' . $this->get('id') . '|max:255',
                    'descripcion' => 'max:250',
                    'precio' => 'required|numeric|min:0',
                    'stock' => 'required|integer|min:0',
                    'categoria_id' => 'required|exists:categorias,id',
                ];
            default:
                return [];
        }
    }
}
