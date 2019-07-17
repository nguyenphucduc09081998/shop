<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'BMS') }} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#007bff" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#007bff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#007bff">
    <!-- Google Font: Source Sans Pro -->
    <style>
        body {
            width: 360px;
            height: auto;
            z-index: -9999;
            margin-left: auto;
            margin-right: auto;
            margin-top: 80px;
            margin-bottom: auto;
        }

        canvas {
            background-color: #e9ecef;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -9999;
        }
    </style>
</head>

<body>
    <!-- background animate -->
    <canvas id="dot-connect"></canvas>
    <!-- /.background animate -->
    <!-- Login -->
    <!-- /.login-box -->
    <!-- dot-connect -->
    <script src="{{asset('lib/canvas-animation/dot-connect.min.js')}}"></script>
    



















</body>

</html>
