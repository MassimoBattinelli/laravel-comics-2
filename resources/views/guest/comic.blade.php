@extends('guest.template.base')

@section('title', 'Comics')

@section('content')
<section>
    <div class="comic">
        <div style="height: 5rem; background-color: #3880F1">
            <div style="height: 100%" class="container p-relative">
                <img class="comic-thumb" src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
        <div class="container comic-container">
            <div class="container-text">
                <h2>{{$comic['title']}}</h2>
                <div class="shop-sec">
                    <div class="price">
                        <div>
                            U.S. Price: <strong style="color: white">{{$comic['price']}}</strong>
                        </div>
                        <div>
                            AVAILABLE
                        </div>
                    </div>
                    <div class="check-ava">Check Availability</div>
                </div>
                <p class="description">{{$comic['description']}}</p>
            </div>
            <img class="adv" src="{{ asset('images/adv.jpg')}}" alt="">
        </div>
        <div class="info">
            <div class="container info-container">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="list-talents">
                        <div class="artists">
                            <p>Art by:</p>
                            <div class="list-artist">
                                @foreach ($comic['artists'] as $artist)
                                    {{$artist}}
                                    @if(!$loop->last)
                                    ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="writers">
                            <p>Written by:</p>
                            <div class="list-writers">
                                @foreach ($comic['writers'] as $writer)
                                    {{$writer}}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <div class="specs-sec">
                        <p>Series:</p>
                        <p>{{$comic['series']}}</p>
                    </div>
                    <div class="specs-sec">
                        <p>U.S. Price:</p>
                        <p>{{$comic['price']}}</p>
                    </div>
                    <div class="specs-sec">
                        <p>On Sale Date: </p>
                        <p>{{$date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
