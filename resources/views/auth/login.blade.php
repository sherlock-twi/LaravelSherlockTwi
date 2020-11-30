@extends('layouts.app')

@section('titlename')
Вход | Шерлок Твай
@endsection

@section('content')
<div class="loginForm">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="name" type="name" class="loginput" name="name" value="{{ old('name') }}" required placeholder="Введите логин" autocomplete="off" autofocus>
        <input id="password" type="password" class="loginput" name="password" required placeholder="Введите пароль" autocomplete="off">
        <button type="submit" class="loginput logbut">{{ __('Войти') }}</button>
        @if (Route::has('password.request'))
            <a class="ForgotPass" href="{{ route('password.request') }}">
                {{ __('Забыли пароль?') }}
            </a>
        @endif
        <input class="remembercheck" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="remembercheck" for="remember">{{ __('Запомнить меня') }}</label>
    </form>
</div>
@endsection
