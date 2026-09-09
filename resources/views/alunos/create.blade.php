@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('alunos-crud.store') }}">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        <label for="curso">Curso</label>
        <input type="text" name="curso" id="curso" value="{{ old('curso') }}">

        <label for="data_nascimento">Data de nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento" value="{{ old('data_nascimento') }}">

        <button type="submit">Cadastrar</button>
    </form>
@endsection
