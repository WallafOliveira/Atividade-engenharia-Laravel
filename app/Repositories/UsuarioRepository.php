<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function get()
    {
        return Usuario::all();
    }

    public function details(int $id)
    {
        return Usuario::findOrFail($id);
    }

    public function store(array $data)
    {
        // Hashear senha antes de salvar
        if (isset($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        }
        return Usuario::create($data);
    }

    public function update(int $id, array $data)
    {
        $usuario = Usuario::findOrFail($id);
        if (isset($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        }
        $usuario->update($data);
        return $usuario;
    }

    public function delete(int $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return $usuario;
    }
}
