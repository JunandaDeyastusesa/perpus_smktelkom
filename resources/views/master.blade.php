<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}"></script>
    <title>@yield('tab-title')</title>
</head>
<body>
    <!-- @include('partials.navbar') -->

    @yield('main')
</body>
</html>