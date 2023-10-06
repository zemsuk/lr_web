<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Thurles Islamic Community Center</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        
    </head>
    <body>
<!-- header section starts  -->
<header class="header">

    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt=""> 
        <div class="logo-text">
            <h1>Thurles ICC</h1>
            <span>Islamic Community Center</span>
        </div>
    </a>

    <nav class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/strategy') }}">Strategy</a>        
        <a href="{{ url('/donate') }}">Donate</a>
        <a href="{{ url('/add_member') }}">Member</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->
        <main>
            @yield('content')
        </main>

<!-- footer section starts  -->

<section class="footer">

    <!-- <div class="box-container">
        
        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> portfolio </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> pricing </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-check"></i> web design </a>
            <a href="#"> <i class="fas fa-check"></i> digital marketing </a>
            <a href="#"> <i class="fas fa-check"></i> email marketing </a>
            <a href="#"> <i class="fas fa-check"></i> content marketing </a>
            <a href="#"> <i class="fas fa-check"></i> seo marketing </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div> -->

    <div class="credit">created by <span>Webpoka</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- jquery file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('js/script.js')}}"></script>
<script>
    $('#dob').datepicker({
        uiLibrary: 'bootstrap4'
    });

</script>
    </body>
</html>
