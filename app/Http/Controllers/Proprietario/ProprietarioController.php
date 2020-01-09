<?php

namespace App\Http\Controllers\Proprietario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proprietario;

class ProprietarioController extends Controller
{
    private $proprietario;

    public function __construct(Proprietario $proprietario){
        $this->proprietario = $proprietario;
    }
    
    public function index(){

        $proprietario = Proprietario::all();
        return view('index')->with(compact('proprietario'));
    }

   

    // public function index(){
    //     $data = ['data' => $this->proprietario->paginate(10)];

    //     return response()->json($data);
    // }
}
