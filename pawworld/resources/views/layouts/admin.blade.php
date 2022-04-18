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
    <link href="{{ asset('\fronted\css\style.min.css') }}" rel="stylesheet">  -->

    <link href="{{ asset('/fronted/css/bootstrap5.min.css') }}" rel="stylesheet">
    
    
</head>
<body>

    <!-- Scripts -->
        <!-- Vendors JS -->

        <script src= {{ asset ('fronted/js/bootstrap.bundle.min.js') }} defer></script>
        
</body>
</html>
