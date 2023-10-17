<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::prefix('pacientes')->group(function () {
    Route::get('/', [PacienteController::class, 'exibeManual']);
    Route::get('/cadastro', [PacienteController::class, 'exibeCadastro']);
    Route::post('/salvar', [PacienteController::class, 'salvar']);
    Route::get('/listar', [PacienteController::class, 'listar']);
    Route::get('/show/{id}', [PacienteController::class, 'show']);
    Route::get('/editar/{id}', [PacienteController::class, 'editaCadastro']);
    Route::get('/excluir/{id}', [PacienteController::class, 'excluiCadastro']);

    Route::prefix('vips')->group(function () {
        Route::get('/', function () {
            echo "Pacientes vips";
        });
    });
});


