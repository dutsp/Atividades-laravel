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
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
            'curso' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date',
        ]);

        Aluno::create($dados);

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email,' . $aluno->id,
            'curso' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date',
        ]);

        $aluno->update($dados);

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno removido com sucesso!');
    }
}
