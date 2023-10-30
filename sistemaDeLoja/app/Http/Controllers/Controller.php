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

            return view('/telaPrincipal', compact('horaFormatada', 'total'));
        } else {
            return view('/welcome');
        }
    }
    public function Pricpal()
    {
        $agora = Carbon::now();
        $total = Funcionario::count();

        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/telaPrincipal', compact('horaFormatada', 'total'));
    }
    public function indexc()
    {
        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/Quarto', compact('horaFormatada'));
    }
    public function resevarQuarto()
    {
        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/resevar', compact('horaFormatada'));
    }
    public function CriarFuncionar(Request $request)
    {

        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        $nome = $request->input('nome');
        $funcionario = Funcionario::where('nome', 'LIKE', '%' . $nome . '%')->paginate(3);

        return view('/funcionarios', compact('funcionario', 'horaFormatada',));
    }
    public function criarNovo()
    {
        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/criarFuncionario', compact('horaFormatada',));
    }
    public function rendaMl()
    {
        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        return view('/rendaMensal', compact('horaFormatada'));
    }
    public function criarFuncionarioNovo(Request $request)
    {
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
        return view('/telaPrincipal', compact('horaFormatada', 'total'));
    }
    public function destroy(Funcionario $funcionarios)
    {
        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        $total = Funcionario::count();
        $funcionarios->delete();
        return redirect()->route('produtos.search', compact('total', 'horaFormatada'))->with('success', 'Funcionário excluído com sucesso.');
    }


    public function edit($id)
    {
        // Aqui você deve recuperar o usuário com base no ID e fazer qualquer processamento necessário
        $funcionario = Funcionario::find($id);

        $agora = Carbon::now();
        $horaFormatada = $agora->format('H:i:s'); // Formato: Hora:Minuto:Segundo
        $total = Funcionario::count();
        // Verifique se o usuário foi encontrado
        if (!$funcionario) {
            return redirect('/usuarios')->with('error', 'Usuário não encontrado');
        }

        return view('users.edit', compact('funcionario', 'total', 'horaFormatada'));
    }


    public function update(Request $request, $id)
    {
        // Recupere o funcionário com base no ID
        $funcionario = Funcionario::find($id);

        // Verifique se o funcionário foi encontrado
        if (!$funcionario) {
            return redirect('/usuarios')->with('error', 'Funcionário não encontrado');
        }

        // Valide os dados recebidos do formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            // Adicione outras regras de validação conforme necessário
        ]);

        // Atualize os dados do funcionário com base nos dados do formulário
        $funcionario->nome = $request->input('nome');
        $funcionario->email = $request->input('email');
        // Atualize outros campos conforme necessário

        // Salve as alterações no banco de dados
        $funcionario->save();

        return redirect('/usuarios')->with('success', 'Funcionário atualizado com sucesso');
    }
}
