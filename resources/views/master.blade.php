<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/iWaste_logo.jpg') }}">
    <script src="{{asset('/js/app.js')}}"></script>
    <title>Waste Monitoring System</title>
  </head>
  @if(url()->current() == action('HomeController@login'))
    <body class="login-body">
  @else
    <body>
      @include('shared.navbar')
  @endif

    @yield('content')
  </body>
</html>
