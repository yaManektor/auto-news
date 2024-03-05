@extends('layout.main')

@section('page-title')
    {{ $item->name }}
@endsection

@section('content')
    <div class="item">
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->anons }}</p>
        <p><b>Ціна: </b>{{ $item->price }} гривень</p>
        <a href="" class="buy-button">Купити</a>
    </div>
@endsection
