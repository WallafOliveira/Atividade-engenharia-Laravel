<?php
namespace App\Repositories;
use App\Models\Autor;

class AutorRepository
{
    public function get(){
        return Autor::all();
    }

    public function details(int $id)
    {
        return Autor::findOrFail($id);
    }

    public function store(array $data)
    {
        return Autor::create($data);
    }

    public function update(int $id, array $data)
    {
        $autores = $this->details($id);
        $autores->update($data);
        return $autores;
    }

    public function delete(int $id)
    {
        $autores = $this->details($id);
        $autores->delete();
        return $autores;
    }
}