<a class="logo-header" href="{{ route('home') }}"><img src={{"img/dc-logo.png"}} alt=""></a>
<nav>
    <ul>
        @foreach($navbar as $key => $item)
        <li> <a href="{{route($key)}}"> {{$item}} </a></li>
        @endforeach
    </ul>
</nav>