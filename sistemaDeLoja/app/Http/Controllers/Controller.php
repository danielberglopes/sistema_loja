<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Funcionario;

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


        $funcionario = Funcionario::all();
        return view('/funcionarios',compact('funcionario',));


        
    }



    public function criarNovo()
    {
        return view('/criarFuncionario');
    }


    public function rendaMl(){
        return view ('/rendaMensal');
    }




    public function criarFuncionarioNovo(Request $request){

        $posts = new Funcionario();
        $posts->nome = $request->nome;
        $posts->sobrenome = $request->sobrenome;
        $posts->Email = $request->Email;
        $posts->telefone = $request->telefone;
        $posts->cpf = $request->cpf;
        $posts->rg = $request->rg;
        $posts->funcao = $request->funcao;
        $posts->numeroDacateiiraDeTrabalho = $request->numeroDacateiiraDeTrabalho;
        $posts->turno = $request->turno;

        $posts->save();

        return view('/telaPrincipal');
        
    }
}
