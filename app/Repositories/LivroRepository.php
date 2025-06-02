<?php

namespace App\Repositories;

use App\Models\Livro;

class LivroRepository
{
    public function get()
    {
        return Livro::all();
    }

    public function details(int $id)
    {
        return Livro::findOrFail($id);
    }

    public function store(array $data)
    {
        return Livro::create($data);
    }

    public function update(int $id, array $data)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($data);
        return $livro;
    }

    public function delete(int $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return $livro;
    }
}
