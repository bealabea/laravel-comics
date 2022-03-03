{{-- aggiungo il layout di default --}}
@extends('layouts.default')

{{-- Modifico il title nell'head' --}}
@section('pageTitle', 'Comics');

@section('mainContent')
<div class="section-title"><h1>current series</h1></div>
<div class="main-container">

    @foreach($data as $card)
    <div class="cards">
        <div class="card-image">
            <img src="{{$card['thumb']}}" alt="">
        </div>
        <div>{{$card['series']}}</div>
    </div> 
    @endforeach
    
</div>
    <div class="button-cards">
        <button> LOAD MORE</button>
    </div>
@endsection