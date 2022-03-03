@extends('layouts.default')

@section('mainContent')
<div class="section-title"><h1>current series</h1></div>
    <cards-container :cards="cards"/>
    <div class="button-cards">
        <button> LOAD MORE</button>
    </div>
@endsection