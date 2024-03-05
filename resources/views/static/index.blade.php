@extends('layout.main')

@section('page-title')
    Головна сторінка сайту
@endsection

@section('content')
    <div class="presentation"></div>

    <div class="articles">
        @foreach($articles as $el)
            <div class="article">
                <img src="/storage/img/articles/{{ $el->image }}">
                <h2>{{ $el->title }}</h2>
                <p>{{ $el->anons }}</p>
                <p class="author"><b>Автор: </b>{{ $el->user->name }}</p>
                <a href="/articles/{{ $el->id }}">Прочитати</a>
            </div>
        @endforeach
    </div>
@endsection
