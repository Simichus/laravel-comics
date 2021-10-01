@extends('layouts.main')

@section('title', 'Comics') 

@section('content')
    <section id="comics">
        <div class="container">
            <h2>Current series</h2>
            <div class="row">
                @foreach($comics as $comic)
                <a href="" class="col">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{$comic['title']}}</h3>
                </a >
                @endforeach
            </div>
            <div  class="load-more">
                <a href="">Load More</a>
            </div>
        </div>
    </section>
@endsection