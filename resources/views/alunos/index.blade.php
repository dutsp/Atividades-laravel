@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <h1>Lista de Alunos</h1>

    @if($alunos->isEmpty() ?? true)
        <p>Nenhum aluno cadastrado.</p>
    @else
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->curso }}</li>
            @endforeach
        </ul>
    @endif

    @include('partials.nav')
@endsection
