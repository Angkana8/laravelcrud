<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @section('css')
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    @show
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <title>@yield('title')</title>
</head>
<body>
     {{-- <h1>Four</h1> --}}
  <div class="container">
        @yield('content')
</div>
        @include('layouts/navber')
   

       
</body>
</html>