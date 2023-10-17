@extends('template')
@section('conteudo')
    <h1>Dados recebidos</h1>
    @foreach ($dados as $nome => $valor)
        @if ($nome != '_token')
            <p><b>{{ ucfirst($nome) }}:</b> {{ $valor }}</p>
        @endif
    @endforeach
@stop
