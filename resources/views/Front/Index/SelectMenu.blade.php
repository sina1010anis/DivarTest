<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('icon/all.css')}}">
    <link rel="stylesheet" href="{{url('Tools/shit.css')}}">
    <link rel="stylesheet" href="{{url('style/css/style.css')}}">
    <link rel="stylesheet" href="{{url('icon/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('icon/brands.css')}}">
    <link rel="stylesheet" href="{{url('icon/solid.css')}}">
    <script src="{{url('Tools/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('style/js/java.js')}}"></script>
    <script src="{{url('icon/all.js')}}"></script>
    <script src="{{url('icon/fontawesome.js')}}"></script>
    <script src="{{url('icon/brands.js')}}"></script>
    <script src="{{url('icon/solid.js')}}"></script>
</head>
<body>
<div id="box">
    <div id="to_box">
        @include('Front.Index.Section.TopHeaderPageIndex')
        @include('Front.Index.Section.SelectTypeNews')
        @yield('Index')
    </div>
</div>
</body>
</html>
