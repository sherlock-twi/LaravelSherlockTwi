@extends('layouts.app')

@section('titlename')
Регистрация | Шерлок Твай
@endsection

@section('content')

<div class="loginForm">
    Регистрация аккаунта<hr>
    <form action="" method="post">
        @csrf
        <input type="login" class="loginput" name="login" id="login" placeholder="Введите логин" autocomplete="off" required>
        <input type="mail" class="loginput" name="mail" id="mail" placeholder="Введите почту" autocomplete="off" required>
        <input type="password" class="loginput" name="password" id="password" placeholder="Введите пароль" autocomplete="off" required>
        <input type="password" class="loginput" name="repassword" id="repassword" placeholder="Повторите пароль" autocomplete="off" required>
        <button type="submit"  class="loginput logbut">Зарегестрировать аккаунт</button>
    </form>
</div>

@endsection