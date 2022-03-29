<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('images/lupa.png')}}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Prévia -->
        <meta property="og:url" content="https://www.google.com/">
        <meta property="og:title" content="CEPfinder">
        <meta property="og:description" content="Encontre informações por meio do CEP.">
        <meta property="og:image" content="https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-world-map-background-image_264225.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:type" content="website">
        <!-- Prévia -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
