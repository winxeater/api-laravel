<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proprietario;
use App\API\ApiError;

class ProprietarioController extends Controller
{
    private $proprietario;

    public function __construct(Proprietario $proprietario){
        $this->proprietario = $proprietario;
    }

    public function index(){
        $data = ['data' => $this->proprietario->paginate(10)];

        return response()->json($data);
    }

    public function show(Proprietario $id){
        $data = ['data' => $id];

        return response()->json($data);
    }

    public function store(Request $request){
        try{
            $proprietarioData = $request->all();
            $this->proprietario->create($proprietarioData);

            $return = ['data' => ['msg' => 'store success!']];
            return response()->json($return, 201);
        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Error', 1010));
        }
    }

    public function update(Request $request, $id){
        try{
            $proprietarioData = $request->all();
            $proprietario = $this->proprietario->find($id);
            $proprietario->update($proprietarioData);

            $return = ['data' => ['msg' => 'update success!']];
            return response()->json($return, 201);
        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Error', 1010));
        }
    }
}
