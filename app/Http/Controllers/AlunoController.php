<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function consultas()
    {
        $doCurso = Aluno::doCurso('Análise e Desenvolvimento de Sistemas')->get();
        $comNome = Aluno::nomeContendo('Silva')->get();
        $recentes = Aluno::recentes()->get();
        $quantidade = Aluno::count();

        return compact('doCurso', 'comNome', 'recentes', 'quantidade');
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
