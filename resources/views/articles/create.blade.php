@extends('layout.main')

@section('page-title')
    Додавання статті
@endsection

@section('content')
    <h1>Додавання статті</h1>
    <a href="/" class="back-button">На головну</a>
    {!! Form::open(['class' => 'article-form', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::label('title', 'Назва статті') }}
        {{ Form::text('title', '', ['placeholder' => 'Введіть назву статті']) }}

        {{ Form::label('anons', 'Анонс статті') }}
        {{ Form::textarea('anons', '', ['placeholder' => 'Введіть анонс статті']) }}

        {{ Form::label('main_image', 'Фото статті') }}
        {{ Form::file('main_image') }}

        {{ Form::label('text', 'Повний текст статті') }}
        {{ Form::textarea('text', '', ['placeholder' => 'Введіть текст статті', 'id' => 'editor']) }}

        {{ Form::submit('Додати', ['class' => 'add-button']) }}
    {!! Form::close() !!}

    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor'));
    </script>
@endsection
