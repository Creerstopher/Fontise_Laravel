<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'information' => 'required|text|max:255',
            'price' => 'required|string|max:15',
            'category' => 'required|integer|exists:category,id',
            'license' => 'required|integer|exists:license,id',
            'styles' => 'required|string|max:15',
        ];
    }
}
