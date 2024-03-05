@extends('layout.main')

@section('page-title')
    Редагування статті
@endsection

@section('content')
    <h1>Редагування статті</h1>
    <a href="/" class="back-button">На головну</a>
    {!! Form::open(['class' => 'article-form', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::label('title', 'Назва статті') }}
        {{ Form::text('title', $article->title, ['placeholder' => 'Введіть назву статті']) }}

        {{ Form::label('anons', 'Анонс статті') }}
        {{ Form::textarea('anons', $article->anons, ['placeholder' => 'Введіть анонс статті']) }}

        {{ Form::label('main_image', 'Фото статті') }}
        {{ Form::file('main_image') }}

        {{ Form::label('text', 'Повний текст статті') }}
        {{ Form::textarea('text', $article->text, ['placeholder' => 'Введіть текст статті', 'id' => 'editor']) }}

        {{ Form::submit('Редагувати', ['class' => 'add-button']) }}
    {!! Form::close() !!}

    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor'));
    </script>
@endsection
