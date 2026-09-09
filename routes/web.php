<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre do sistema de gerenciamento de alunos.';
});

Route::get('/alunos', function () {
    return 'Lista de alunos do sistema.';
});

Route::get('/contato', function () {
    return 'Página de contato: contato@campo-real.edu.br';
});

Route::get('/produto/{id}', function ($id) {
    return "Detalhes do produto de id {$id}.";
});

Route::get('/categoria/{id}', function ($id) {
    return "Detalhes da categoria de id {$id}.";
});

Route::get('/usuario/{id}', function ($id) {
    return "Perfil do usuário de id {$id}.";
});

use App\Http\Controllers\AlunoController;

Route::resource('alunos-crud', AlunoController::class);
