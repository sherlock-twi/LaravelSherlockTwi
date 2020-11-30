@extends('layouts.app')

@section('titlename')
Регистрация | Шерлок Твай
@endsection

@section('content')
<div class="loginForm">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="loginput" name="name" value="{{ old('name') }}" required placeholder="Введите логин" autocomplete="off" autofocus>
        <input id="email" type="email" class="loginput" name="email" value="{{ old('email') }}" required placeholder="Введите почту" autocomplete="off">
        <input id="password" type="password" class="loginput" name="password" required placeholder="Введите пароль" autocomplete="off">
        <input id="password-confirm" type="password" class="loginput" name="password_confirmation" required placeholder="Повторите пароль" autocomplete="off">
        <button type="submit" class="loginput logbut">{{ __('Зарегистрироваться') }}</button>
    </form>
</div>
@endsection
