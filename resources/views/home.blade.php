@extends('layouts.app')
@section('content')
<div class="container">
        <h1>Movie DB</h1>
        <div class="wrapper">
           
            @foreach ($movie as $item)
               <div class="movie-card">
                <img src="{{$item->image}}" alt="{{$item->title}}">
                <div class="card-txt">
                    
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->original_title}}</p>
                    <p>{{$item->nationality}}</p>
                    <p>{{$item->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection