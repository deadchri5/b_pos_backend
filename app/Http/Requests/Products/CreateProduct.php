<?php

namespace App\Http\Requests\Products;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreateProduct extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:255',
            'desc'     => 'required|string',
            'price'    => 'required|numeric|min:0',
            'stock'    => 'required|integer|min:0',
            'category' => 'required|integer',
            'upc'      => 'required|string|max:255',
            'provider' => 'required|integer',
            'unit'     => 'required|integer',
            'brand'    => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'El nombre es obligatorio.',
            'name.string'       => 'El nombre debe ser una cadena de texto.',
            'name.max'          => 'El nombre no debe exceder los 255 caracteres.',
            'desc.required'     => 'La descripción es obligatoria.',
            'desc.string'       => 'La descripción debe ser una cadena de texto.',
            'price.required'    => 'El precio es obligatorio.',
            'price.numeric'     => 'El precio debe ser un número.',
            'price.min'         => 'El precio no puede ser negativo.',
            'stock.required'    => 'El stock es obligatorio.',
            'stock.integer'     => 'El stock debe ser un número entero.',
            'stock.min'         => 'El stock no puede ser negativo.',
            'category.required' => 'La categoría es obligatoria.',
            'category.integer'  => 'La categoría debe ser un número entero.',
            'category.exists'   => 'La categoría seleccionada no existe.',
            'upc.required'      => 'El UPC es obligatorio.',
            'upc.string'        => 'El UPC debe ser una cadena de texto.',
            'upc.max'           => 'El UPC no debe exceder los 255 caracteres.',
            'upc.unique'        => 'El UPC ya está registrado.',
            'provider.required' => 'El proveedor es obligatorio.',
            'provider.integer'  => 'El proveedor debe ser un número entero.',
            'provider.exists'   => 'El proveedor seleccionado no existe.',
            'unit.required'     => 'La unidad es obligatoria.',
            'unit.integer'      => 'La unidad debe ser un número entero.',
            'unit.exists'       => 'La unidad seleccionada no existe.',
            'brand.required'    => 'La marca es obligatoria.',
            'brand.integer'     => 'La marca debe ser un número entero.',
            'brand.exists'      => 'La marca seleccionada no existe.',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Error de validación.',
                'errors'  => $validator->errors(),
            ], 422)
        );
    }
}
