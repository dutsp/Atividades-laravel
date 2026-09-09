<?php

namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller
{
    public function show($id)
    {
        $curso = Curso::with('alunos')->findOrFail($id);

        return view('cursos.show', compact('curso'));
    }
}
