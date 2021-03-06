<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="application-name" content="{{ config('app.name', 'Laravel') }}">

        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="app">
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
