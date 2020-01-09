<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request){
        if(!filter_var($request->username)){
            $login['success'] = false;
            $login['message'] = 'Usuário ou senha inválido!';
            echo json_encode($login);
            return;
        }

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
    
        if(Auth::attempt($credentials)){
            $login['success'] = true;
    
            echo json_encode($login);
            return;
        }
    
        $login['success'] = false;
        $login['message'] = 'Os dados informados não conferem!';
    
        echo json_encode($login);
        return;
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

    
}
