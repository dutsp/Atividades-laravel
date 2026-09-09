@extends('layouts.app')

@section('title', $curso->nome)

@section('content')
    <h1>{{ $curso->nome }}</h1>
    <p>Carga horária: {{ $curso->carga_horaria }}h</p>

    <h2>Alunos matriculados</h2>

    @if($curso->alunos->isEmpty())
        <p>Nenhum aluno matriculado neste curso.</p>
    @else
        <ul>
            @foreach($curso->alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->email }}</li>
            @endforeach
        </ul>
    @endif
@endsection
