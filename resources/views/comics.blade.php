{{-- aggiungo il layout di default --}}
@extends('layouts.default')

{{-- Modifico il title nell'head' --}}
@section('pageTitle', 'Comics');

@section('mainContent')
<div class="jumbo">
    <div class="section-title"><h1>current series</h1></div>
</div>
<div class="main-container">
    <div class="card-container">

        @foreach($data as $card)
        <a class="card-link" href="{{route('comic.details', $loop->index)}}"><div class="cards">
            <div class="card-image">
                <img src="{{$card['thumb']}}" alt="">
            </div>
            <div>{{$card['series']}}</div>
        </div> </a>
        @endforeach
    
    </div>
</div>
<div class="button-cards">
    <button> LOAD MORE</button>
</div>

<section>
    <div class="container">
        <div class="info-shop">
            <img src="/img/buy-comics-digital-comics.png" alt="">
            <div class="shop-text"> DIGITAL COMICS </div>
        </div>
        <div class="info-shop">
            <img src="/img/buy-comics-merchandise.png" alt="">
            <div class="shop-text"> DC MERCHANDISE </div>
        </div>
        <div class="info-shop">
            <img src="/img/buy-comics-subscriptions.png" alt="">
            <div class="shop-text"> SUBSCRIPTION </div>
        </div>
        <div class="info-shop">
            <img src="/img/buy-comics-shop-locator.png" alt="">
            <div class="shop-text"> COMIC SHOP LOCATOR </div>
        </div>
        <div class="info-shop visa">
            <img src="/img/buy-dc-power-visa.svg" alt="">
            <div class="shop-text"> DC POWER VISA </div>
        </div>
    </div>
</section>
@endsection