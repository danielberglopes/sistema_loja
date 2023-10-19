<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Funcionario;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;




    public function logon()
    {
        return view('/welcome');
    }

    public function auth(Request $request)
    {

        $agora = Carbon::now();
       
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        $total = Funcionario::count();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return view('/telaPrincipal',compact( 'horaFormatada','total'));
        } else {
            return view('/welcome');
        }
    }
     public function Pricpal(){
        $agora = Carbon::now();
        $total = Funcionario::count();
       
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/telaPrincipal',compact('horaFormatada','total'));
     }

    public function indexc()
    {

        $agora = Carbon::now();
        
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo

        return view('/Quarto',compact( 'horaFormatada'));
    }



    public function resevarQuarto()
    {
        $agora = Carbon::now();
   
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo

        return view('/resevar', compact( 'horaFormatada'));
    }


    public function CriarFuncionar(Request $request)
    {


        $agora = Carbon::now();

        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo

        $nome = $request->input('nome');
        $funcionario = Funcionario::where('nome', 'LIKE', '%' . $nome . '%')->get();

        return view('/funcionarios',compact('funcionario', 'horaFormatada'));


        
    }



    public function criarNovo()
    {

        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo

        return view('/criarFuncionario',compact('horaFormatada'));
    }


    public function rendaMl(){

        $agora = Carbon::now();

        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo

        return view ('/rendaMensal',compact( 'horaFormatada'));
    }

    public function criarFuncionarioNovo(Request $request,$id ){
        $agora = Carbon::now();

        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        $posts = new Funcionario();
        $total = Funcionario::count();
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

        return view('/telaPrincipal',compact('horaFormatada','total'));
        
    }


   

    
    public function destroy($id)
    {
        $produto = Funcionario::findOrFail($id);
        $produto->delete();
        return View('/funcionarios',   compact(' produto'));
    }
}
