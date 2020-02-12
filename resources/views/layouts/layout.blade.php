<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dev Nord CMR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    
            @yield('content')

            <footer>
                <p>Copyright 2020 Dev Nord CMR</p>
            </footer>
        </div>
    </body>
</html>
