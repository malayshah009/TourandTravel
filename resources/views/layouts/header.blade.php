<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        jQuery(function($){
            var $navbar = $('.main-nav');
            $(window).scroll(function(event){
                var $current = $(this).scrollTop();
                if($current> 505){
                    $navbar.addClass('navbar-color');
                }
                else{
                    $navbar.removeClass('navbar-color');
                }
            });
        });
    </script>
  </head>
  <body>
    <nav class="main-nav">
        <div class="nav-img">
            <div>
                <a href="/">
                <img src="http://127.0.0.1:8000/img/hmlogow.png" alt="Logo" width="100%" height="50px">
                </a>
            </div>
            <div class="in-nav">
                <a href="http://127.0.0.1:8000" class="m-2">Home</a>
                <a href="http://127.0.0.1:8000/about" class="m-2">About</a>
                <a href="http://127.0.0.1:8000/bookt" class="m-2">Tours</a>
                <a href="http://127.0.0.1:8000/contactus" class="m-2">Contactus</a>
                {{-- <a href="http://127.0.0.1:8000/login" class="m-2">Login</a> --}}
                @if(session()->has('id'))
                <a href="/logout">Logout</i></a>
                @else
                <a href="/login"><i class="fa fa-user" ></i></a>
                @endif
            </div>
        </div>
    </nav>

    {{-- <div class="banner">
        <img src="{{ url("/img/bg4.jpg") }}" alt="" width="100%" height="600px">

        <div class="abc">
            <h1>DISCOVER THE WORLD</h1>
        </div>
    </div> --}}

    {{-- <div class="banner">
        <img src="{{ url("/img/beach2.jpg") }}" alt="" width="100%" height="600px">

        <div class="abc">
            <h1>DISCOVER THE WORLD</h1>
        </div>
    </div> --}}

    {{-- <div class="banner">
        <img src="{{ url("/img/beach1.jpg") }}" alt="" width="100%" height="600px">

        <div class="abc">
            <h1>DISCOVER THE WORLD</h1>
        </div>
    </div>
    <div class="banner">
        <img src="{{ url("/img/bg12.jpg") }}" alt="" width="100%" height="600px">

        <div class="abc">
            <h1>DISCOVER THE WORLD</h1>
        </div>
    </div> --}}







