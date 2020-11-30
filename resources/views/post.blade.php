@extends('layouts.app')

@section('titlename')
{{$news->paragraph}} | Шерлок Твай
@endsection

@section('content')
    <div class="newstable">
        <div class="maincontent">{{-- <img src="/images/TwiNIGHT.png" alt="NewsImage" class="card__image"> --}}
            <a href="{{route('home')}}"><span class="postButtons"> < На главную</span></a> <span class="paragraph">{{$news->paragraph}}</span>
            <span class="mainnew">{{$news->text}}</span>
        </div>
        <div class="rightside">
            Автор: {{$news->author}}<br>
            Дата: {{$news->created_at}}<br>
            <a href="{{route('PostEdit', $news->id)}}"><span class="postButtons">Редактировать</span></a>
            <a href="{{route('PostDelete', $news->id)}}"><span class="postButtons">Удалить</span></a>
        </div>
    </div>
@endsection
