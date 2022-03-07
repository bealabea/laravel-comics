@extends('layouts.default')

@section('pageTitle', $comic['series']);

@section('mainContent')
<div class="jumbo"></div>
<div class="section">
<img class="comic-img" src="{{$comic['thumb']}}" alt="">
</div>
<div class="details-container">
    <div class="details-left">
        <h1 class="details-title">{{$comic['title']}}</h1>
        <div class="green-bar">
            <div class="comic-price"> 
                <p> U.S. Price: <strong> {{$comic['price']}} </strong></p>
                <p>AVAILABLE</p>
            </div>
            <div class="comic-check"> 
                <p><strong>Check Availability &#9660;</strong></p>
            </div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="details-right">
        <img src="/img/adv.jpg" alt="">
    </div>
    
</div>

@endsection