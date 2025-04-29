<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>JKEE Group</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('logo.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('logo.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('logo.png')}}">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/facdori-icon/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bands-icon/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">



    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>

    <div class="page-wrapper">

        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')


    </div><!-- /.page-wrapper -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- /.scroll-to-top -->
    @include('layouts.footer_script')
