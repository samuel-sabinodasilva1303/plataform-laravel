<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <title>@yield('page-title')</title>
        @vite('resources/css/app.css')
    </head> 
    <body>
        <div id="app">
            <div class="paginacontainer">	
                <div class="progress-wrap">
                    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                    </svg>
                </div>
            </div>
        </div>
        
        @vite('resources/js/app.js')
    </body>
</html>
