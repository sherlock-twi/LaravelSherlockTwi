@extends('layouts.app')

@section('titlename')
Новости | Шерлок Твай
@endsection

@section('content')
<div class="cards">
    @foreach($news as $nn)
    <a class="post_a" href="{{  route('PostShower', $nn->id) }}"><div class="card">
        <img src="/images/TwiNIGHT.png" alt="" class="card__image">
        <div class="card__paragraph">{{$nn->paragraph}}</div>
        <div class="card__info">{{$nn->author}} | {{$nn->created_at}} <span class="enjoy">Нажмите для прочтения</span></div>
    </div></a>
    @endforeach
</div>
@endsection
