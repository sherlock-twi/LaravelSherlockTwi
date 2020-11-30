@extends('layouts.app')

@section('titlename')
Новый пароль | Шерлок Твай
@endsection

@section('content')
<div class="loginForm">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email" class="loginput" name="email" value="{{ $email ?? old('email') }}" required placeholder="Введите почту" autocomplete="off" autofocus>
        <input id="password" type="password" class="loginput" name="password" required placeholder="Введите новый пароль" autocomplete="off">
        <input id="password-confirm" type="password" class="loginput" name="password_confirmation" required placeholder="Подтвердите новый пароль" autocomplete="off">
        <button type="submit" class="loginput logbut">{{ __('Восстановить пароль') }}</button>
    </form>
</div>
@endsection
