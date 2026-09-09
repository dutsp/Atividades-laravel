@extends('layouts.app')

@section('title', 'Entrar')

@section('content')
    <h1>Entrar</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <button type="submit">Entrar</button>
    </form>
@endsection
