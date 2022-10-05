<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Api\ApiMessages;
use App\Models\Fare;
use App\Http\Requests\FareRequest;
use Illuminate\Http\Request;

class FareController extends Controller
{
    private $fare;

    public function __construct(Fare $fare)
    {
        $this->fare = $fare;
    }


    public function index()
    {
        $fare = $this->fare->paginate('10');
        return response()->json($fare, 200);
    }

    
    //cadastrar tarifa
    public function store(FareRequest $request)
    {
        $data = $request->all();
        
        try {
            $fare = $this->fare->create($data);

            if (isset($data['fare']) && count($data['fare'])) {
                $fare->fare()->sync($data['fare']);
            }

            return response()->json([
                'data' => [
                    'msg' => 'Tarifa cadastrada com sucesso!'
                    ]
                ], 200);
                
            } catch (\Throwable $th) {
                $message = new ApiMessages($th->getMessage());
                return response()->json($message->getMessage(), 401);
            }
            
        }
        
    //mostrar tarifa
    public function show($id)
    {
        try {
            $fare = $this->fare->findOrFail($id);
            return response()->json([
                'data' => $fare
                ]
            , 200);
    
        } catch (\Throwable $th) {
            $message = new ApiMessages($th->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    //atualizar tarifa
    public function update ($id, fareRequest $request)
    {
        $data = $request->all();

        try {
            $fare = $this->fare->findOrFail($id);
            $fare->update($data);

            if (isset($data['fare']) && count($data['fare'])) {
                $fare->fare()->sync($data['fare']);
            }

            return response()->json([
                'data' => [
                    'msg' => 'Tarifa Atualizado com sucesso!'
                ]
            ], 200);

        } catch (\Throwable $th) {
            $message = new ApiMessages($th->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    //remover tariva
    public function destroy ($id)
    {
      
        try {
            $fare = $this->fare->findOrFail($id); //dados em massa
            $fare->delete();
            return response()->json([
                'data' => [
                    'msg' => 'Tarifa deletado com sucesso!'
                ]
            ], 200);

        } catch (\Throwable $th) {
            $message = new ApiMessages($th->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
