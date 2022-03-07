{{-- richiamo da config l'array della navbar --}}
@php
    $navbar = config('navbar-items');
@endphp

{{-- assegno al logo la home --}}
<a class="logo-header" href="{{ route('home') }}"><img src={{"/img/dc-logo.png"}} alt=""></a>
<nav>
    <ul>
        {{-- foreach per gli elementi della navbar --}}
        @foreach($navbar as $key => $item)
        <li> <a href="{{route($key)}}"> {{$item}} </a></li>
        @endforeach
    </ul>
</nav>