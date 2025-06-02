<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ajuste se precisar de autorização específica
    }

    public function rules(): array
    {
        return [
            'nota' => 'required|string|max:255',
            'texto' => 'required|string',
        ];
    }
}
