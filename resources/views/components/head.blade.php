<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="forntEnd-Developer" content="Mamunur Rashid" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/progress-steps.css') }}" />

    @livewireStyles
    
  </head>

  <body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
      </div>
    </div>
    <!-- preloader area end -->

    <!-- Set currency  -->
    @php
        $currency = Session::get('currency');
    @endphp