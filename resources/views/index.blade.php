@extends('layouts.main')
@section('main-contant')
    <div class="banner">
        <img src="{{ url('/img/bg4.jpg') }}" alt="" width="100%" height="600px">
        <div class="abc">
            <h1>EXPLORE THE WORLD</h1>
        </div>
    </div>
    {{-- <div class="container sel">
        <div class="sel-top m-2">
                <a href="#"  style="margin-left: 450px; padding:0 10px">Flight</a>
                <a href="#" style="padding:0 10px">Car</a>
                <a href="#" style="padding:0 10px;">Hotel</a>
        </div>
        <hr style="width:100%;">
        <div class="row">
            <input type="text" style="border: 0.5px solid black; border-radius:5px; padding:6px 40px; margin:5px 10px 15px 15px;">
            <input type="text" style="border: 0.5px solid black; border-radius:5px; padding:6px 40px; margin:5px 10px 15px 10px;">
            <input type="text" style="border: 0.5px solid black; border-radius:5px; padding:6px 40px; margin:5px 10px 15px 10px;">
            <button class="btn btn-primary" style="border: 0.5px solid black; border-radius:5px; padding:6px 106px; margin:5px 10px 15px 10px;">Search</button>
        </div>
    </div> --}}
    @if (session()->has('success'))
    <div class="alert alert-success">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif
    <div class="in-top">
        <div class="in-top1"></div>
        <div class="in-top2">
            <h2>Go further with the Explore Country</h2>
            <p class="pt-1">I love going on location, and the location was nice. Put me in an interesting location with
                good people and I'm there.</p>
            <h6 class="pt-2">Scan the QR code with your device camera and visit place</h6>
        </div>
        <div class="in-top3"><img src="{{ url('/img/b-qr.png') }}" alt="" width="110%" height="100px"></div>
    </div>
    <hr>

    <div class="t-des">
        <div class="extd">
            <h3 style="margin-left:20px">Explore stays in trending destinations</h3>
            <a href="{{ url('bookt') }}">Explore More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div style="display: flex; flex-wrap:wrap;">
            <div class="desti5">
                <a href="/dubai" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Dubai</h5>
                            <p>United Arab Emirate</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="desti2">
                <a href="/leh-ladakh" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Leh Ladakh</h5>
                            <p>India</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="desti6">
                <a href="/pattaya" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Pattaya</h5>
                            <p>Thailand</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="desti4">
                <a href="/goa" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Goa</h5>
                            <p>India</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="cye">
        <h1>Choose your Experiences</h1>
        <p>Fill your life with adventures, not things. Have stories to tell, not stuff to show.</p>
        <div class="cye1">
            <div>
                <img src="{{ url('/img/cye1.jpg') }}" alt="" height="175px" width="175px">
                <img src="{{ url('/img/cye6.jpg') }}" alt="" height="550px" width="175px">
            </div>
            <div>
                <img src="{{ url('/img/cye2.jpg') }}" alt="" height="550px" width="400px">
                <div style="display:flex;">
                    <img src="{{ url('/img/cye7.jpg') }}" alt="" height="175px" width="175px">
                    <img src="{{ url('/img/cye8.jpg') }}" alt="" height="175px" width="132%">
                    <img src="{{ url('/img/cye9.jpg') }}" alt="" height="175px" width="175px">
                </div>
            </div>
            <img src="{{ url('/img/cye3.jpg') }}" alt="" height="175px" width="100%">
            <img src="{{ url('/img/cye4.jpg') }}" alt="" height="175px" width="175px">
            <div>
                <img src="{{ url('/img/cye5.jpg') }}" alt="" height="175px" width="175px">
                <img src="{{ url('/img/cye10.jpg') }}" alt="" height="550px" width="175px">
            </div>
        </div>
        <div class="cye2">
            <h1>Choose your</h1>
            <h1>Dream Destination</h1>
        </div>
    </div>
    <hr>
    <div class="indesign">
        <h1>Discover the most engaging places</h1>
        <p>Let's see the world with us with you and your family.</p>
        <div class="indes">
            <div class="indes1">
                <img src="{{ url('/img/burj.jpg') }}" height="550px" width="100%">
                <div class="indestxt">
                    <h2>Dubai</h2>
                    <p>A city of towering skyscrapers, cultural fusion, and extravagant lifestyles set against the backdrop
                        of Arabian sands.</p>
                </div>
            </div>
            <div class="indes2">
                <img src="{{ url('/img/goa-beach.jpg') }}" height="550px" width="100%">
                <div class="indestxt2">
                    <h2>Goa</h2>
                    <p>A tapestry of sandy shores, pulsating nightlife, and Portuguese-inspired charm beckoning travelers to
                        unwind and explore.</p>
                </div>
            </div>
            <div class="indes3">
                <img src="{{ url('/img/leh-ladakh.jpg') }}" height="550px" width="100%">
                <div class="indestxt">
                    <h2>Leh-ladakh</h2>
                    <p>majestic mountains meet serene lakes, weaving tales of adventure and peace beneath endless skies.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:azure; width:100%; height:0.5px;"></div>
    <div class="lblogf">
        <h1>Latest on the blogs</h1>
        <p>We want to help youto travel better!</p>
        <div class="lblog">
            <div class="lblog1">
                <img src="{{ url('/img/lb1.jpg') }}" alt="" width="auto" height="320px">
                <a href="/blog1">For More <i class="fa-solid fa-arrow-right"></i></a>
                <div class="h4">
                    <h4>10 mistakes every first time traveller will make and how to avoid them!</h4>
                </div>
            </div>
            <div class="lblog2">
                <img src="{{ url('/img/lb2.jpg') }}" alt="" width="auto" height="320px">
                <a href="/blog2">For More <i class="fa-solid fa-arrow-right"></i></a>
                <div class="h4">
                    <h4>What's it really like to move a country where you don't speak the language?</h4>
                </div>
            </div>
            <div class="lblog3">
                <img src="{{ url('/img/lb3.jpg') }}" alt="" width="auto" height="320px">
                <a href="/blog3">For More <i class="fa-solid fa-arrow-right"></i></a>
                <div class="h4">
                    <h4>Exploring the quite corners of Oslo | Gallop around the globe.</h4>
                </div>
            </div>
            <div class="lblog4">
                <img src="{{ url('/img/lb4.jpg') }}" alt="" width="auto" height="320px">
                <a href="/blog4">For More <i class="fa-solid fa-arrow-right"></i></a>
                <div class="h4">
                    <h4>11 things to know before you visit rainbow mountain.</h4>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:azure; width:100%; height:0.5px;"></div>
@endsection
