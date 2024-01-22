<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Developer | R.Kraupas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Inter+Tight:wght@200;300;400;500;600&family=Limelight&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="/style.css">
    </head>
    <body class="antialiased bg-[#f8f8f8]">
        <div class="overflow-hidden" id="app">
            <router-view></router-view>
        </div>
    </body>
    <script src="//unpkg.com/alpinejs"></script>
    <script src="/assets/js/Animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</html>
