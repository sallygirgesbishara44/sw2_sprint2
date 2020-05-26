<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" >
        <link rel="stylesheet" href="{{ asset('css/feedback.css')}}" >
    </head>
    <body>
      @include('includes.navbar')
      <div class="container">

      @yield('content')
    </div>
    </body>

</html>
