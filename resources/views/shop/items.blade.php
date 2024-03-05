@extends('layout.main')

@section('page-title')
    Магазин автотоварів
@endsection

@section('content')
    <div class="items">
        @foreach($items as $el)
            <div class="item">
                <h1>{{ $el->name }}</h1>
                <p>{{ $el->anons }}</p>
                <p><b>Ціна: </b>{{ $el->price }} гривень</p>
                <a href="shop/items/{{ $el->id }}">Детальніше</a>
            </div>
        @endforeach
    </div>
@endsection
