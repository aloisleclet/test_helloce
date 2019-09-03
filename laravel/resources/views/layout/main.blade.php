<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css"/>

        <title>Test HelloCE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
       <div class="background"></div>
       @yield('content')
       <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
