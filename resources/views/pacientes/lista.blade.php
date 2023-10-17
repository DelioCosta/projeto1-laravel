@extends('template')
@section('conteudo')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->email }}</td>
                    <td>{{ $paciente->telefone }}</td>
                    <td>{{ $paciente->cpf }}</td>
                    <td>{{ $paciente->created_at }}</td>
                    <td>{{ $paciente->updated_at }}</td>
                    <td>
                        <a href="/pacientes/show/{{$paciente->id}}" class="btn btn-warning">Exibir</a>
                        <a href="/pacientes/editar/{{$paciente->id}}" class="btn btn-info">Editar</a>
                        <a href="/pacientes/excluir/{{$paciente->id}}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
