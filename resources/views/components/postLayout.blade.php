<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            background: white;
            color: #222222;
            max-width: 600px;
            margin: auto;
            font-family: sans-serif;
        }

        p{
            line-height: 1.6;
        }

        article{
            padding: 0px 30px;
            margin-top: 3rem;
            border-top: 1px solid #cbd5e0;
        }
        a{
            text-decoration: none;
            color: #1a1e21;
        }
        h1{
            margin-top: 3rem;
            text-align: center;
            font-size: 25px;
        }

        .date-post{
            padding-right: 4%;
            text-align: right;
        }
    </style>
    <title>Post page</title>
</head>
<body>
    {{View::make('components/header')}}
    {{$slot}}
</body>
</html>

