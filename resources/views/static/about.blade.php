@extends('layout.main')

@section('page-title')
    Сторінка про нас
@endsection

@section('content')
    <div class="block">
        <h1>Про нас</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque, blanditiis dolor ducimus earum error excepturi inventore laborum, mollitia natus nemo numquam pariatur perferendis, quas quisquam rem repellendus suscipit voluptatem.</p>

        @if(count($params) > 0)
            <ul>
                @foreach($params as $el)
                    <li>{{ $el }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
