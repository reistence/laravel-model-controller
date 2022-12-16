@extends('layouts.app')
@section('content')
<div class="container">
        <h1>Movies</h1>
        <div class="wrapper">
           
            @foreach ($movie as $item)
               <div class="movie-card">
                <img src="{{$item->image}}" alt="{{$item->title}}">
                <div class="layer"></div>
                <div class="card-txt">
                    <h3>{{$item->title}}</h3>
                    <p>Original title: {{$item->original_title}}</p>
                    <p>Nationality: {{$item->nationality}}</p>
                    <p><i class="fa-solid fa-chart-simple"></i>        {{$item->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection