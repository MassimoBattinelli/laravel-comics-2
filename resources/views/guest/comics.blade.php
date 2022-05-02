@extends('guest.template.base')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="card-container container">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href="comics/{{$comic['id']}}" class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                    </a>
                    <h5>{{$comic['title']}}</h5>
                </div>
            @endforeach
        </div>
    </main>
    <div class="sub-menu">
        <div class="container">
            <div>
                <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
                DIGITAL COMICS
            </div>
            <div>
                <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
                DC MERCHANDISE
            </div>
            <div>
                <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">
                SUBSCRIPTIONS
            </div>
            <div>
                <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
                COMIC SHOP LOCATOR
            </div>
            <div>
                <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
                DC POWER VISA
            </div>
        </div>
    </div>

@endsection
