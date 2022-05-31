<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://d3a1eo0ozlzntn.cloudfront.net/assets/css/main_v2-built.dba8de4033.v2.css">
    <link rel="stylesheet" href="{{asset('css/message.css')}}">
    <script src="{{asset('js/message.es5.js')}}"></script>
    <title>Post page</title>
</head>
<body>
    {{View::make('components/header')}}
    {{$slot}}
    {{View::make('components/footer')}}
</body>
</html>

