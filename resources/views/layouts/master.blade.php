<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/round-about.css')}}" rel="stylesheet"> -->
    <style>
      html, body {
        overflow-x: hidden !important;
      }
    </style>

  </head>
  <body>
   @include('layouts.header')
   @yield('content') 
   @include('layouts.footer')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>