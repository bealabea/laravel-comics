{{-- richiamo da config l'array della navbar --}}
@php
    $navbar = config('navbar-items');
@endphp

<div class="footer-container">
    <div class="footer-nav">
        <ul>
            <li><h3>DC COMICS</h3></li>
            {{-- foreach per gli elementi della navbar che sono ripetuti nel footer --}}
            @foreach($navbar as $key => $item)
            <li> <a href="{{route($key)}}"> {{$item}} </a></li>
            @endforeach
            
            <li><h3>SHOP</h3></li>
            <li> <a href="#"> Shop DC </a></li>
            <li> <a href="#"> Shop DC Collectibles </a></li>
        </ul>
        <ul>
            <li><h3>DC</h3></li>
            <li> <a href="#"> Terms of Use </a></li>
            <li> <a href="#"> Privacy Policy </a></li>
            <li> <a href="#"> Ad Choices </a></li>
            <li> <a href="#"> Advertising </a></li>
            <li> <a href="#"> Jobs </a></li>
            <li> <a href="#"> Subscriptions </a></li>
            <li> <a href="#"> Talent Workshops </a></li>
            <li> <a href="#"> CPSC Certificates </a></li>
            <li> <a href="#"> Ratings </a></li>
            <li> <a href="#"> Shop Help </a></li>
            <li> <a href="#"> Contact Us </a></li>
        </ul>
        <ul>
            <li><h3>SITES</h3></li>
            <li> <a href="#"> DC </a></li>
            <li> <a href="#"> MAD Magazine </a></li>
            <li> <a href="#"> DC Kid </a></li>
            <li> <a href="#"> DC Universe </a></li>
            <li> <a href="#"> DC Power Visa </a></li>
        </ul>
    </div>
    <div class="logo-img">
        <img src={{"/img/dc-logo-bg.png"}} alt="">
    </div>
</div>

<section class="social-bg">
    <div class="footer-social">
        <div>
            <button>SIGN-UP NOW</button>
        </div>
        <div class="social-icons">
            <div>FOLLOW US</div>
            <img src="/img/footer-facebook.png" alt="">
            <img src="/img/footer-twitter.png" alt="">
            <img src="/img/footer-youtube.png" alt="">
            <img src="/img/footer-pinterest.png" alt="">
            <img src="/img/footer-periscope.png" alt="">
        </div> 
    </div>
</section>