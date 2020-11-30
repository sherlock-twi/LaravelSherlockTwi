@extends('layouts.app')

@section('titlename')
Восстановление пароля | Шерлок Твай
@endsection

@section('content')
<div class="loginForm">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input id="email" type="email" class="loginput" name="email" value="{{ old('email') }}" required placeholder="Введите почту" autocomplete="off" autofocus>
        <button type="submit" class="loginput logbut">{{ __('Отправить ссылку для восстановления') }}</button>
    </form>
</div>
@endsection
