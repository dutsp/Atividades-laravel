@extends('layouts.app')

@section('title', 'Cadastrar-se')

@section('content')
    <h1>Criar conta</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Confirmar senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <button type="submit">Cadastrar</button>
    </form>
@endsection
