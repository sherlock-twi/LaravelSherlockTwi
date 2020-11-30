@extends('layouts.app')

@section('titlename')
Редактирование записи | Шерлок Твай
@endsection

@section('content')



<form action="{{ route('editNews', $news->id) }}" method="post" class="form">
    @csrf
    <input type="text" name="paragraph" value="{{$news->paragraph}}" id="paragraph" placeholder="Параграф" class="textarea">
    <textarea type="text" name="text" id="text" placeholder="Текст" class="textarea">{{$news->text}}</textarea>
    <button type="submit" class="textarea">Обновить</button>
</form>
@endsection