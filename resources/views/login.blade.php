@extends('layouts.app')

@section('titlename')
Вход | Шерлок Твай
@endsection

@section('content')

<div class="loginForm">
    Вход в аккаунт<hr>
    <form action="" method="post">
        @csrf
        <input type="login" class="loginput" name="login" id="login" placeholder="Введите логин" autocomplete="off">
        <input type="password" class="loginput" name="password" id="password" placeholder="Введите пароль" autocomplete="off">
        <button type="submit"  class="loginput logbut">Войти в аккаунт</button>
    </form>
</div>

@endsection