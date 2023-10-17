@extends('template')
@section('conteudo')
    <h1>Cadastro de Pacientes</h1>
    <form action="/pacientes/salvar" method="post">
        @csrf
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ isset($paciente) ? $paciente->nome : ''}}">
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ isset($paciente) ? $paciente->email : ''}}">
        </div>
        <div>
            <label>Telefone:</label>
            <input type="text" name="telefone" value="{{ isset($paciente) ? $paciente->telefone : ''}}">
        </div>
        <div>
            <label>CPF:</label>
            <input type="text" name="cpf" value="{{ isset($paciente) ? $paciente->cpf : ''}}">
        </div>
        <div>
            @if (isset($paciente))
                <input type="hidden" name="id" value="{{ $paciente->id }}">
            @endif
            <input type="submit" value="Enviar">
        </div>
    </form>
@stop
@section('rodape')
<h1>EU sou o rodapé</h1>
@stop
