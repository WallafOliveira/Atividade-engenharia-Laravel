<?php
namespace App\Services;
use App\Repositories\AutorRepository;

class AutorService
{
    private AutorRepository $autorRespository;
    public function __construct(AutorRepository $autorRespository)
    {
        $this->autorRepository = $autorRespository;
    }

    public function get()
    {
        $autores = $this->autorRepository->get();
        return $autores;
    }

    public function details(int $id)
    {
        return $this->autorRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->autorRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->autorRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->autorRepository->delete($id);
    }
    
}