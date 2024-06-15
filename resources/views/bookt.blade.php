@extends('layouts.main')
@section('main-contant')
    <div class="banner-bt">
        <img src="{{ url('/img/bg2c.jpg') }}" alt="" width="100%" height="450px">

        <div class="abc-bt">
            <h1>Explore the world, Go On</h1>
            <h1 style="margin-top: -15px">Adventure</h1>
        </div>
    </div>
    <hr style="margin-top:0">
    <h6 style="margin: 10px 75px;"> <a href="/">Home </a> / Tours</h6>
    <div class="line"></div>
    <div class="t-des mt-3">
        <h3 style="margin: 0 0 10px 105px">National Holiday Packages</h3>
        <div class="container" style="display: flex; flex-wrap:wrap;">
            <div class="tour1">
                <a href="/kedarnath" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Kedarnath</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour2">
                <a href="/leh-ladakh" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Leh Ladakh</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour3">
                <a href="/kasol-manali" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Kasol Manali</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour4">
                <a href="/goa" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Goa</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr style="margin-top:0">
    <div class="t-des">
        <h3 style="margin: 0 0 10px 105px">International Holiday Packages</h3>
        <div class="container" style="display: flex; flex-wrap:wrap;">
            <div class="tour5">
                <a href="/dubai" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Dubai</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                                {{-- <i class="fa-solid fa-ticket"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour6">
                <a href="/pattaya" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Pattaya</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                                {{-- <i class="fa-solid fa-ticket"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour7">
                <a href="/singapore" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>Singapore & Bali</h2>
                            <div class="touri1">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                                {{-- <i class="fa-solid fa-ticket"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tour8">
                <a href="/london" style="text-decoration: none">
                    <div class="tourback">
                        <div class="tourtext">
                            <h2>London</h2>
                            <div class="touri">
                                <i class="fa-solid fa-train"></i>
                                <i class="fa-solid fa-utensils"></i>
                                <i class="fa-solid fa-tent"></i>
                                <i class="fa-solid fa-person-hiking"></i>
                                <i class="fa-solid fa-notes-medical"></i>
                                {{-- <i class="fa-solid fa-ticket"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="t-des mt-3">
        <h3 style="margin-left:20px">National Holiday Packages</h3>
        <div style="display: flex; flex-wrap:wrap;">
            <div class="desti1">
                <a href="/kedarnath" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Kedarnath</h5>
                            <p>India</p>
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
            <div class="desti3">
                <a href="/kasol-manali" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Kasol Manali</h5>
                            <p>India</p>
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
    <hr style="margin-top:0">
    <div class="t-des">
        <h3 style="margin-left:20px">International Holiday Packages</h3>
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
            <div class="desti7">
                <a href="/singapore" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>Singapore & Bali</h5>
                            <p>Singapore</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="desti8">
                <a href="/london" style="text-decoration: none">
                    <div class="destiback">
                        <div class="destitext">
                            <h5>London</h5>
                            <p>United kingdom</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
@endsection
