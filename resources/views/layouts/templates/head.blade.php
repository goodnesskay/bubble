<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- Colors -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors/cyan.css') }}">
    <!-- Skin switcher -->
    <!-- Manually link your desire skin -->
    <style type="text/css">
        .skins {
            position: fixed;
            top: 190px;
            left: -120px;
            transition: .3s ease-in-out;
            z-index: 1000;
        }

        .skins:hover {
            left: 0;
        }

        .skin-colors {
            list-style: none;
            padding: 20px;
            margin: 0;
            background-color: #fff;
            width: 120px;
            border: 1px solid #e7e7e7;
        }

        .skin-colors li {
            position: relative;
            display: inline-block;
            width: 32px;
            height: 32px;
            cursor: pointer;
            margin: -3px;
            line-height: 0;
            transition: .3s ease-in-out;
        }

        .skin-colors li:hover {
            opacity: .7;
        }

        .skin-colors li.active::before {
            content: "\f00c";
            font-family: FontAwesome;
            font-size: 20px;
            width: 32px;
            line-height: 32px;
            text-align: center;
            position: absolute;
            color: #fff;
        }

        .skin-toggler {
            position: absolute;
            display: inline-block;
            width: 50px;
            height: 50px;
            right: -49px;
            top: 0;
            background-color: #fff;
            font-size: 30px;
            text-align: center;
            line-height: 50px;
            color: #888;
            border: 1px solid #e7e7e7;
            border-left: 0;
        }

        .skin-toggler .fa {
            transform: rotate(30deg);
            -webkit-transition: 2s;
            -moz-transition: 2s;
            -ms-transition: 2s;
            -o-transition: 2s;
            transition: 2s;
            animation: gear 1s infinite;
        }

        @keyframes gear {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }
    </style>
</head>

<body id="up">