<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>@yield('title')</title>
   <!-------CSS  ---->
   <link rel="stylesheet" href="{{asset('lib/font-awesome/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('lib/font-awesome-5/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('lib/adminlte/css/adminlte.min.css')}}">
  

   @stack('page-styles')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
   <div class="wrapper">
      @include('layouts.navbar')

      @include('layouts.sidebar')

      @yield('content')
   </div>
    <!-------JavaScript  ---->
   <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('lib/adminlte/js/adminlte.js')}}"></script>
   @stack('page-scripts')
</body>

</html>