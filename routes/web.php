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
