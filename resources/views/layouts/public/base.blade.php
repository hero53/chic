<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Page Title -->
  <title>{{$title}}</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('assets/images/page/Arrière-plan.ico')}}" type="image/x-icon"> --}}
  <link rel="shortcut Icon" href="{{asset('/images/page/Arrière-plan.ico')}}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.datetimepicker.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>
<body>
  <!-- Preloader Starts -->
    <div class="preloader">
      <div class="spinner"></div>
    </div>
  <!-- Preloader End -->

  @yield('content')




{{-- footer --}}
  @include('layouts.public._footer')
{{-- </div> --}}
</body>
</html>