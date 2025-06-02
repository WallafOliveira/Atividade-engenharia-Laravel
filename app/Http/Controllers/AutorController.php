<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AutorService;
use App\Http\Resources\AutorResource;
use App\Http\Requests\AutorStoreRequest;
use App\Http\Requests\AutorUpdateRequest;



class AutorController extends Controller
{
    private AutorService $autorService; 

    public function __construct(AutorService $autorService) 
    {
        $this->autorService = $autorService;
    }

    public function get()
    {
        $autores = $this->autorService->get();
        return AutorResource::collection($autores);
    }

    public function details($id)
    {
        try{
            $autores = $this->autorService->details($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Autores not found'],404);
        }
        return new AutorResource($autores);
    }

    public function store(AutorStoreRequest $request){
        $data = $request->validated();
        $autores = $this->autorService->store($data);
        return new AutorResource($autores);
        
    }

    public function update(int $id, AutorUpdateRequest $request)
    {
        $data = $request->validated();
        try{
            $autores = $this->autorService->update($id,$data);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'autor not found'],404);
        }
        return new AutorResource($autores);

    }

    public function delete(int $id)
    {
        try{
            $autores = $this->autorService->delete($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'autor not found'],404);
        }
        return new AutorResource($autores);
    }
}
