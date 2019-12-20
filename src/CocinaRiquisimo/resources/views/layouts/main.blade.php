<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/hover-min.css">
    <link rel="shortcut icon" href="img/icons/secondary.png">
    <script src="/js/app.js" defer></script>
    <script src="/js/main.js" defer></script>
</head>
<body>
    <!-- el "/" se puede reemplazar con un "." -->
    <div id="app">
        <header>
            @include('partials.nav')
        </header>
        <div class="d-flex flex-column h-screen justify-content-between">
            <main class="py-2">
                <div class="container">
                    @yield('content')
                </div>        
            </main>
        
            <footer>                
                <div class="container p-2">
                    <hr>
                    Cocina Riquísimo | Copyright © 20{{ date('y') }}
                </div>
            </footer>
        </div>
    </div>
</body>
</html>