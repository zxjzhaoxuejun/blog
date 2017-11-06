<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@section('title')@show</title>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('bootstrap3.3.7/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('layer/layer.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap3.3.7/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}" />

</head>
<body>
@yield('content')
</body>
</html>