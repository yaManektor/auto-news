@extends('layout.main')

@section('page-title')
    Реєстрація
@endsection

@section('content')
    <h1>Реєстрація</h1>
    <a href="/" class="back-button">На головну</a>

    <form method="POST" action="/register" class="article-form">
        @csrf

        <label for="name">Ім'я</label>
        <input id="name" type="text" value="{{ old('name') }}" name="name">

        <label for="email">Email</label>
        <input id="email" type="email" value="{{ old('email') }}" name="email">

        <label for="password">Пароль</label>
        <input id="password" type="password" name="password">

        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Підтвердження пароля</label>
        <input id="password-confirm" type="password"  name="password_confirmation" >

        <input type="submit" value="Зареєструватися" style="width: 140px">
    </form>
@endsection
