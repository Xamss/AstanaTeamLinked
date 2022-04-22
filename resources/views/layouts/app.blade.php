<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="/app.css">
        <script src="/app.js"></script>
        <title>{{config('app.name', 'APP_NAME')}}</title>
    </head>
    <body class="antialiased">
        {{View::make('components/header')}}
        @yield('content')
        {{View::make('components/footer')}}
    </body>
</html>
