<!DOCTYPE html>
<html lang="hu" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Tanulószoba') }}</title>

        <meta name="description" content="Kuckó --Tanulószoba, ahol hatékonyan fejlesztheted a tudásodat, és elmélyítheted a megszerzett ismereteket.">
        <meta name="keywords" content="tanulás, oktatás, tanulószoba, interaktív, tudás, fejlesztés, platform, magyar, kuckó, kuckótanulószoba, korrepetálás, gyerekek, iskola, Eger, segítség">
        <meta name="author" content="Kuckó Tanulószoba">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="icon" type="image/png" href="/favicon.png">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Kuckó Tanulószoba">
        <meta property="og:description" content="Kuckó Tanulószoba, ahol hatékonyan fejlesztheted a tudásodat, és elmélyítheted a megszerzett ismereteket.">
        <meta property="og:image" content="/og-image.png">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Tanulószoba">
        <meta name="twitter:description" content="Kuckó Tanulószoba, ahol hatékonyan fejlesztheted a tudásodat, és elmélyítheted a megszerzett ismereteket.">
        <meta name="twitter:image" content="/og-image.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Nunito:wght@400;500;600;700;800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Patrick+Hand&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
