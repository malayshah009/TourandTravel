@extends('layouts.main')
@section('main-contant')
    <div class="banner-bt">
        <img src="{{ url('/img/topabout.jpg') }}" alt="" width="100%" height="450px">

        <div class="abc-about">
            <h1>About Us</h1>
        </div>
    </div>
    </div>
    <h6 style="margin: 10px 75px;"> <a href="/">Home </a> / About</h6>
    <div class="line"></div>
    <div class="container abouttop">
        <div class="abouttop1"><img src="{{ url('/img/11.png') }}" alt="" height="100%" width="500px"></div>
        <div class="abouttop2">
            <h2>Get To Know More</h2>
            <h1>Explore All Tour Of The <br>
                World With Us.
            </h1>
            <p>That sounds like an amazing adventure! There are countless incredible
                destinations around the world to explore. From the ancient wonders of
                Egypt to the stunning landscapes of New Zealand, the bustling streets of
                Tokyo to the historic cities of Europe, there's something for everyone.</p>
            <p>Whether you're into history, nature, food, or culture, each corner
                of the globe offers its own unique experiences and treasures to discover.
                Are there any specific places you're interested in visiting, or are you
                open to exploring all corners of the world?
            </p>
            <hr>
            <div class="abt">
                <i class="fa-solid fa-location-dot"></i>
                <p class="p1">Tour Guide</p>
                <i class="fa-solid fa-wallet"></i>
                <p class="p1">Friendly Price</p>
                <i class="fa-solid fa-file"></i>
                <p>Reliable Tour Package</p>
            </div>
        </div>
    </div>
    <div class="aboutnum">
        <div class="aboutnum1">
            <h1>10</h1>
            <p>Years Experience</p>
        </div>
        <div class="sline"></div>
        <div class="aboutnum1">
            <h1>8</h1>
            <p>Tour Packages</p>
        </div>
        <div class="sline"></div>

        <div class="aboutnum1">
            <h1>450</h1>
            <p>Happy Customers</p>
        </div>
        <div class="sline"></div>
        <div class="aboutnum2">
            <h1>10</h1>
            <p> Award Winning</p>
        </div>
    </div>
    <hr>
    <div class=" container aboutperf">
        <div class="aboutperftop">
            <h4>Core Features</h4>
            <h1><span>Find</span> Travel Perfection</h1>
            <p>Achieving a seamless blend of planning, spontaneity, cultural immersion,
                and personal <br>well-being in travel experiences.</p>
        </div>

        <div class="aboutperfbox">
            <div class="box1">
                <i class="fa-regular fa-flag fa-2xl"></i>
                <h4>Tell Us What You <br>
                    Want To Do</h4>
                <p>A user-friendly travel
                    website with destination guides,
                    booking, inspiration, and resources
                    for seamless
                    trip planning.</p>
            </div>
            <div class="box1">
                <i class="fa-solid fa-location-dot fa-2xl"></i>
                <h4>Share Your Travel <br>
                    Locations</h4>
                <p>
                    "Travel broadens the mind, enriches
                    the soul, and creates lasting memories."
                </p>
            </div>
            <div class="box1">
                <i class="fa-regular fa-map fa-2xl"></i>
                <h4>Share Your Travel <br>
                    Preference</h4>
                <p>I'd say my ideal travel destinations
                    are places with rich history, diverse
                    cultures, stunning natural landscapes,
                    and vibrant city life.
                </p>
            </div>
            <div class="box1">
                <i class="fa-regular fa-thumbs-up fa-2xl"></i>
                <h4>100% Trusted <br>
                    Tour Agency</h4>
                <p>
                    For a 100% trusted tour agency, prioritize
                    customer reviews, industry certifications,
                    and years of experience.
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class=" container aboutguide">
        <div class="aboutguidetop">
            <h4>Tour Guide</h4>
            <h1><span>Meet Our</span> Excellent Guide</h1>
            <p>Embark on an unforgettable journey with our excellent tour
                <br>guide leading the way.
            </p>
        </div>
        <div class="aboutguidebox">
            <div class="box1">
                <img src="{{ url('/img/user1.png') }}" alt="" height="225px" width="255px">
                <h5 class="mt-2">Kenil Masket</h5>
                <p>Tour Guide</p>
            </div>
            <div class="box1">
                <img src="{{ url('/img/user2.png') }}" alt="" height="225px" width="255px">
                <h5 class="mt-2">Nelly Gongunk</h5>
                <p>Tour Assistant</p>
            </div>
            <div class="box1">
                <img src="{{ url('/img/user3.jpg') }}" alt="" height="225px" width="255px">
                <h5 class="mt-2">Helmum Jakson</h5>
                <p>Director</p>
            </div>
            <div class="box1">
                <img src="{{ url('/img/user4.jpg') }}" alt="" height="225px" width="255px">
                <h5 class="mt-2">Mully Helman</h5>
                <p>Tour Guide</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container aboutreview">
        <div class="aboutguidetop">
            <h4>Our Testimonials</h4>
            <h1><span>What They Are</span> Talking About</h1>
            <p>They're discussing various aspects of our site, likely including
                <br>feedback, Reviews, and suggestions.
            </p>
        </div>
        <div class="aboutreviewbottom">
            <div class="aboutreview1">
                <div class="revbox">
                    <img src="{{ "/img/user1.png" }}" alt="" height="100px" width="100px">
                    <h6>Malay Shah</h6>
                    <div class="revboxi">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h6 class="revtitle">Excellent</h6>
                    <p>"An unforgettable journey filled with breathtaking landscapes, cultural immersion, and cherished memories."</p>
                </div>
                <div class="revbox">
                    <img src="{{ "/img/user2.png" }}" alt="" height="100px" width="100px">
                    <h6>Elly jonsan</h6>
                    <div class="revboxi">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h6 class="revtitle">Good</h6>
                    <p>"The tour trip was fantastic, offering a perfect blend of adventure, relaxation, and cultural immersion."</p>
                </div>
                <div class="revbox">
                    <img src="{{ "/img/user3.jpg" }}" alt="" height="100px" width="100px">
                    <h6>Miraj Ghoghari</h6>
                    <div class="revboxi">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h6 class="revtitle">Excellent</h6>
                    <p>"Celebrated our journey with breathtaking sights, delightful experiences, and unforgettable memories."</p>
                </div>
            </div>
            <div class="aboutreview2"><img src="{{ url('/img/22.png') }}" alt="" height="380px" width="320px">
            </div>
        </div>
    </div>
@endsection
