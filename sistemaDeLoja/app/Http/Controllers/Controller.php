<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;




    public function logon()
    {
        return view('/welcome');
    }

    public function auth(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return view('/telaPrincipal');
        } else {
            return view('/welcome');
        }
    }

    public function index()
    {
        return view('/cadastrarUmQuarto');
    }



    public function resevarQuarto()
    {
        return view('/resevar');
    }


    public function CriarFuncionar()
    {
        return view('/funcionarios');
    }



    public function criarNovo()
    {
        return view('/criarFuncionario');
    }
}
