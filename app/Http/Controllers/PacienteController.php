<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function exibeManual() {
        return view('pacientes.manual');
    }

    public function exibeCadastro () {
        return view('pacientes.cadastro');
    }

    public function salvar(Request $request) {
        $dados = $request->all();

        if(!isset($dados['id'])){
            $paciente = Paciente::create($dados);
        }else{
            $paciente = Paciente::find($dados['id'])->update($dados);
        }

        return view('pacientes.dados', ['dados' => $dados]);
    }

    public function listar() {
        $pacientes = Paciente::all();

        return view('pacientes.lista',['pacientes'=>$pacientes]);
    }

    public function show($id) {
        $paciente = Paciente::find($id);
        // $paciente = Paciente::where('cpf',$id)->first();

        $dados['nome'] = $paciente->nome;
        $dados['email'] = $paciente->email;
        $dados['telefone'] = $paciente->telefone;
        $dados['cpf'] = $paciente->cpf;

        return view('pacientes.dados', ['dados' => $dados]);
    }

    public function editaCadastro ($id) {
        $paciente = Paciente::find($id);

        return view('pacientes.cadastro', compact('paciente'));
    }

    public function excluiCadastro ($id) {
        Paciente::find($id)->delete();

        return redirect('pacientes/listar');
    }
}
