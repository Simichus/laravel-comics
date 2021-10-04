@extends('layouts.main')

@section('title', $comic['title'])

@section('content')

<section id="comic">
    <div class="poster">
        <figure class="container">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </figure>
    </div>
    <div class="description container">
        <div class="comic-desc">
            <h1>{{$comic['title']}}</h1>
            <div class="price-bar">
                <div class="price-info">
                    <div class="price">U.S. Price: {{$comic['price']}}</div>
                    <div class="disponibility">AVAILABLE</div>
                </div>
                <div class="avbl-check">
                    Check Availability <i class="fa fa-chevron-down"></i>
                </div>

            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="adv">
            <div class="advertisement">AVERTISEMENT</div>
            <img src="{{asset('images/adv.png')}}" alt="Unleash Heroic Rewards">
        </div>
    </div>
    <div class="comic-info">
        <div class="info container">
            <div class="talent">
                <h2>Talent</h2>
                <div class="artists">
                    <h3>Art by:</h3>
                    <div>
                        @foreach($comic['artists'] as $artist) 
                        {{$artist}} @if(!$loop->last),@endif
                        @endforeach   
                    </div>
                </div>
                <div class="writers">
                    <h3>Written by:</h3>
                    <div>
                        @foreach($comic['writers'] as $writer) 
                        {{$writer}} @if(!$loop->last),@endif
                        @endforeach   
                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="series">
                    <h3>Series</h3>
                    <div>
                        {{$comic['series']}}  
                    </div>
                </div>
                <div class="us-price">
                    <h3>U.S. Price</h3>
                    <div>
                        {{$comic['price']}}  
                    </div>
                </div>
                <div class="sales">
                    <h3>On Sale Date</h3>
                    <div>
                        {{$comic['sale_date']}}  
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection