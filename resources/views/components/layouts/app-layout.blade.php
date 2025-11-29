<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <link rel="stylesheet" href="{{$css}}">
    
    <title>CRUD</title>
</head>
<body>
    <div class="orb"></div>
    <div class="spark"></div>
    {{$slot}}
    <script src="{{$js}}"></script>
    <script src="{{asset('js/universal.js')}}"></script>
</body>
<x-footer></x-footer>
</html>