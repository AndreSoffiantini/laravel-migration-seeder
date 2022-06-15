<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-migration-seeder</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Wait the page is fully loaded to load our script using 'defer' -->
        <script src="{{asset('js/app.js')}}" defer></script>
        
    </head>
    <body>
        
        <header>

        </header>

        <main>
            @yield('content')
        </main>
        
        <footer>

        </footer>

    </body>
</html>
