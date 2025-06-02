<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ajuste se precisar de autorização específica
    }

    public function rules(): array
    {
        return [
            'nota' => 'sometimes|required|string|max:255',
            'texto' => 'sometimes|required|string',
        ];
    }
}
