<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSC</title>
    <link rel="icon" href="//{{ asset('img') }}/ssc logo.png">
    <link rel="stylesheet" href="//{{ asset('css') }}/animate.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/themify-icons.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/flaticon.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/magnific-popup.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/slick.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/style1.css">
    <link rel="stylesheet" href="//{{ asset('font') }}/bootstrap-icons.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="//{{ asset('css') }}/style.css">

<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="//{{ asset('css') }}/styles2.css" rel="stylesheet" type="text/css"/>


</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color: white;">
        <div class="container" style="background-color: white;">
            <a class="navbar-brand" href="{{ route('front.index') }}"><img src="//{{ asset('img') }}/ssc logo.png" width="50%"
                    style="margin-left: -65px; margin-top:
                        -25px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.index') }}"
                            style="font-size:
                                110%;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"
                            style="font-size:
                                110%;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="font-size: 110%;">Services</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#our_customers" style="font-size:
                                110%;">Our Customers</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact') }}" style="font-size: 110%;">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="font-size: 110%;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('front.lang' , ['lang' => 'ar']) }}">Arabic</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.lang' , ['lang' => 'en']) }}">English</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
