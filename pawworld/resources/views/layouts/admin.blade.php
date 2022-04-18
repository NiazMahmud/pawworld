<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />  

    <!-- Styles
    <link href="{{ asset('\fronted\css\vendor\bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\vendor\font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\vendor\ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\vendor\linearicon.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\vendor\line-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\vendor\vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\plugins\animate.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\plugins\jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\plugins\plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('\fronted\css\style.css') }}" rel="stylesheet">
      -->

    
    <link href="{{ asset('/admin/css/material-dashboard.css') }}" rel="stylesheet">
    
    
</head>
<body class="g-sidenav-show  bg-gray-200">
   @include('layouts.inc.sidebar')
   <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.inc.adminnav')
        <div class="content">
         @yield('content')
        </div>
    
         @include('layouts.inc.adminfooter')
    </main>
    <!-- Scripts -->
        <!-- Vendors JS -->
 <!--   Core JS Files   -->
        <script src= {{ asset ('admin/js/core/popper.min.js') }} defer></script>
        <script src= {{ asset ('admin/js/plugins/perfect-scrollbar.min.js') }} defer></script>
        <script src= {{ asset ('admin/js/plugins/smooth-scrollbar.min.js') }} defer></script>
        <script src= {{ asset ('admin/js/plugins/chartjs.min.js') }} defer></script>
        @yield('script')
</body>
</html>
