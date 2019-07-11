<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('lib/adminlte/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/avery-dennison.css')}}">
</head>
<body>
    <div class="app-content">
        @include('layouts.navbar-header')
        @yield('content')<br>
        @include('layouts.navbar-footer')
        
    </div>
</body>

</html>