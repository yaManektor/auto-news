@extends('layout.main')

@section('page-title')
    {{ $article->title }}
@endsection

@section('content')
    <h1>{{ $article->title }} / Стаття на Auto News</h1>
    <a href="/" class="back-button">На головну</a>
    <div class="articles one">
            <div class="article">
                <img src="/storage/img/articles/{{ $article->image }}">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->anons }}</p><br>
                <p>{!! $article->text !!}</p>
                <p class="author"><b>Автор: </b>{{ $article->user->name }}</p>

                @auth
                    @if(Auth::user()->id == $article->user_id)
                        <br><hr>
                        <a href="/articles/{{$article->id}}/edit">Редагувати</a>
                        {!! Form::open(['method' => 'DELETE']) !!}
                            {{ Form::submit('Видалити', ['class' => 'delete-button']) }}
                        {!! Form::close() !!}
                    @endif
                @endauth
            </div>
    </div>

    <div class="comments">
        <h1>Коментарі ({{ count($article->comments) }})</h1>
        @foreach($article->comments as $el)
            <div class="comment">&#10077;{{ $el->text }}&#10078; &#8213; {{ $el->user->name }}</div>
        @endforeach

        @auth
            <hr>
            <h1>Форма коментарів</h1>
            <form action="" method="POST" class="article-form">
                @csrf

                <label for="com_text">Коментар</label>
                <textarea name="com_text" id="com_text" placeholder="Введіть ваш коментар..."></textarea>

                <input type="submit" class="add-btn" value="Додати">
            </form>
        @endauth
    </div>
@endsection
