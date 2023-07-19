<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('index')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-warning"><i class="fa fa-book me-3"></i>vERTEX</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}"> {{__('labels.home')}} </a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                <a href="{{ route('courses') }}" class="nav-item nav-link {{ (request()->is('courses')) ? 'active' : '' }}">Room</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{route('team')}}" class="dropdown-item">Our Team</a>
                        <a href="{{'testimonial'}}" class="dropdown-item">Testimonial</a>
                        <a href="{{'404'}}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a  class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
                <div class="nav-item dropdown">
                    <form action="">
                        <div class="dropdown fade-down m-0">
                            <select name="language" id="language-option" class="nav-link dropdown-toggle select">
                                <option value="en" @if (Session::get('locale') == 'en') selected @endif>
                                    English
                                </option>
                                <option value="mm" @if (Session::get('locale') == 'mm') selected @endif>
                                    Myanmar
                                </option>
                            </select>
                        </div>
                    </form>
                    

                </div>
            </div>
            <a href="" class="btn btn-warning py-4 px-lg-5 d-none d-lg-block">Online Booking<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            $('#language-option').change(function() {
                window.location.href = "/locale/" + $(this).val();
            });
        });
    </script>
    <!-- Navbar End -->
