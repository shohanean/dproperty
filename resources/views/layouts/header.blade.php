<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!--favicon-->
    <link href="{{ asset('dashboard_assets/images/favicon.ico') }}" rel="shortcut icon">

    <!--Preloader-CSS-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/preloader/preloader.css') }}">

    <!--bootstrap-4-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}">

    <!--Custom Scroll-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/customScroll/jquery.mCustomScrollbar.min.css') }}">
    <!--Font Icons-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/simple-line/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/dripicons/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/eightyshades/eightyshades.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/foundation/foundation-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/metrize/metrize.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/typicons/typicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/icons/weathericons/css/weather-icons.min.css') }}">

    <!--Date-range-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/date-range/daterangepicker.css') }}">
    <!--Drop-Zone-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/dropzone/dropzone.css') }}">
    <!--Full Calendar-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/full-calendar/fullcalendar.min.css') }}">
    <!--Normalize Css-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/normalize.css') }}">
    <!--Main Css-->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/main.css') }}">
</head>
<body>
