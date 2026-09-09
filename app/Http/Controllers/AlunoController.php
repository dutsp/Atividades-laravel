<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
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
        $this->authorize('create', Aluno::class);

        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $this->authorize('create', Aluno::class);

        $dados = $request->validated();

        Aluno::create($dados);

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('update', $aluno);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('update', $aluno);

        $dados = $request->validated();

        $aluno->update($dados);

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);

        $this->authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos-crud.index')
            ->with('sucesso', 'Aluno removido com sucesso!');
    }
}
