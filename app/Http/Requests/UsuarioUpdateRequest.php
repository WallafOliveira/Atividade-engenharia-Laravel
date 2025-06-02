<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;  // Sem restrição
    }

    public function rules(): array
    {
        $usuarioId = $this->route('id');

        return [
            'name'  => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|max: 255',
            'senha' => 'sometimes|required|string|min:6',
        ];
    }
}
