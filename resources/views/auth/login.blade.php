@extends('layout.main')

@section('page-title')
    Авторизація
@endsection

@section('content')
    <h1>Авторизація</h1>
    <a href="/" class="back-button">На головну</a>

    <form method="POST" action="/login" class="article-form">
        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" value="{{ old('email') }}" name="email">

        <label for="password">Пароль</label>
        <input id="password" type="password" name="password">

        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Запамятати мене</label>

        <input type="submit" value="Ввійти" class="login-btn">
    </form>

    <a href="/register">Не маєте аккаунта? Зареєструватися</a>
@endsection
