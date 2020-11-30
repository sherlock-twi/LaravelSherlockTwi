@extends('layouts.app')

@section('titlename')
Вход | Шерлок Твай
@endsection

@section('content')



<form action="{{ route('form') }}" method="post" class="form">
    @csrf
    <input type="text" name="paragraph" id="paragraph" placeholder="Параграф" class="textarea">
    <input type="text" name="author" id="author" placeholder="Автор" class="textarea">
    <textarea type="text" name="text" id="text" placeholder="Текст" class="textarea"></textarea>
    <button type="submit" class="textarea">Отправить</button>
</form>
@endsection