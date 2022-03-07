<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('pageTitle')</title>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <header class="header">
        {{-- uso la stessa navbar per tutte le pagine --}}
        @include('partials.navbar')
    </header>
    
    <main>
        @yield('mainContent') 
    </main>

    <footer>
        {{-- uso lo stesso footer per tutte le pagine --}}
        @include('partials.footer')
    </footer>
</body>
</html>