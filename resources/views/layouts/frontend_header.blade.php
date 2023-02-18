<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="ab, AB, abfarhan, ab-farhan, farhan, Farhan, ab farhan">
    <meta name="author" content="Abu Bokkor Farhan">
    <title>AB Farhan || Protfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/' . $basicSettings->favicon) }}">
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/responsive.css">
</head>

<body data-spy="scroll" data-target="#nav_bar" data-offset="70">

    <!--	header_part  start here  -->
    <header class="header_part">
        <nav class="navbar navbar-expand-lg navbar-light" id="nav_bar">
            <div class="container">
                <a class="navbar-brand" href="#">AB Farhan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#protfolio">protfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                    </ul>

                </div>

                <div class="social_link">
                    <ul>
                        <li><a href="https://www.facebook.com/far.han.79677471"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--	header_part  end here  -->

    <!-- 	miobile_menu start here    -->
    @include('layouts.frontend_section.mobile_menu')
    <!-- 	miobile_menu end here   -->
