@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/goa1.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Goa</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">Goa</h2>
            <p>Lost Yourself In the God's Own Beach</p>
            <div class="d-flex">
                <div class="details-i" style="margin-left:0; ">
                    <i class="fa-solid fa-calendar-days fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Duration</p>
                        <p class="p2">5 days/ 4 Nights</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-map fa-lg"></i>
                    <div class="details-p">
                        <p class="p1">Difficulty</p>
                        <p class="p2">Easy</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-user-group fa-lg"></i>
                    <div class="details-p">
                        <p class="p1">Age Group</p>
                        <p class="p2">12-50 years</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-person-hiking fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Max Altitude</p>
                        <p class="p2">500ft</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5>About</h5>
            <p style="color: rgb(111, 111, 111);">Goa, a coastal state in western India, is renowned for its blend of Indian
                and Portuguese influences, <br>manifested in its culture, cuisine, and architecture. Its picturesque
                beaches,
                such as Baga, Calangute, and <br>Palolem, attract tourists seeking relaxation and water sports. The state's
                rich history, marked by over four <br>centuries of Portuguese rule, is evident in its colonial-era churches,
                cathedrals, and forts. Goa's vibrant <br>nightlife, featuring beachside parties and clubs, adds to its
                allure. Visitors can indulge in delicious seafood <br>dishes, experience traditional festivals like Carnival
                and Christmas, and explore lush wildlife sanctuaries. <br>Overall, Goa offers a unique fusion of heritage,
                natural beauty, and leisure activities, making it a popular<br> destination for travelers from around the world.
            </p>
        </div>
        <div class="details-ts">
            <div class="details-r">
                <i class="fa-solid fa-indian-rupee-sign fa-xl"></i>
                <h3>{{ $packagePrice }}</h3>
                <p>/person</p>
            </div>
            <p style="margin-left: 2px;">Includes</p>
            <div class="includes">
                <div class="include">
                    <div class="include1">
                        <i class="fa-solid fa-burger fa-lg"></i>
                        <p>Food</p>
                    </div>
                    <div class="include2">
                        <i class="fa-solid fa-football"></i>
                        <p>Activities</p>
                    </div>
                </div>
                <div class="include">
                    <div class="include3">
                        <i class="fa-solid fa-bandage"></i>
                        <p>First Aid</p>
                    </div>
                    <div class="include4">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>Instructor</p>
                    </div>
                </div>
                <div class="include">
                    <div class="include5">
                        <i class="fa-solid fa-tent"></i>
                        <p>Stay</p>
                    </div>
                    <div class="include6">
                        <i class="fa-solid fa-train-subway"></i>
                        <p>Travelling</p>
                    </div>
                </div>
                <div class="include">
                    <div class="include7">
                        <i class="fa-solid fa-money-bill"></i>
                        <p>Clubing</p>
                    </div>
                    <div class="include8">
                        <i class="fa-solid fa-wine-glass"></i>
                        <p>Night-Life</p>
                    </div>
                </div>
            </div>
            {{-- <button data-bs-toggle="modal" data-bs-target="#mybook">Book Now</button> --}}
            <a href={{ route('Bookregistration', ['packagePrice' => $packagePrice]) }} class="btn btn-primary">Book Now</a>
        </div>
        <div class="datenote">
            <h6>Note:</h6>
            <ul>
                <li>This Package Valid for Every Month</li>
                <li><b>Departure Date :</b><span id="kedardate"> 11th of every month</span></li>
                <li><b>Arriving Date :</b> 15th of every month</li>
                <li>As per Schedule Starting</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <hr>
        <h4 style="color:#007bff">Schedule</h4>
        <div class="d-flex">
            <div class="sched-l"></div>
            <div class="sched-r">
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 1</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Arrival at Goa Airport</h4>
                        <p>Arrival at madgoan and sightseen <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/goaair.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 2</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Visit South Goa Beach And Club</h4>
                        <p> Cola beach, Butterfly beach etc. <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal2">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/butterfly.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 3</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Visit Churches at Panjim and wall of Street.</h4>
                        <p> Basilica of Bom Jesus church and Big Daddy Casino. <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/church.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 4</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Visit North Goa and Night Life of goa</h4>
                        <p> Baga Beach, Calangute Beach and White Goa club... <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/nightlife.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 5</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Visit Dudh-Sagar Waterfall and return Journey</h4>
                        <p> Dudh-Sagar Waterfall And Drop at station <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal5">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/dudh-sagar.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ditailsbook">
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 18,500/person</p>
        <button data-bs-toggle="modal" data-bs-target="#mybook">Book Now</button>
    </div>


    <div class="modal" id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 1</b></h6>
                    <h4 style="color: #007bff">Arrival at Goa Airport</h4>
                    <ul>
                        Arrival at Goa: 04:00 PM<br>
                        <li>After reaching Goa resort Madgoan, rest or visit Madgoan City And Vas-da-gama City. </li>
                        <li>Dinner at resort.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 2</b></h6>
                    <h4 style="color: #007bff">Visit South Goa Beach And Club</h4>
                    <ul>
                        <li>At morning first visit Cola beach and do kayaking for 1 hour. breakfast at cola Beach</li>
                        <li>Butter Fly Beach : Forigeners Beach</li>
                        <li>At Night Visit Club At South Goa. Dinner At Club</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 3</b></h6>
                    <h4 style="color: #007bff">Visit Churches at Panjim and wall of Street.</h4>
                    <ul>
                        <li>After Breakfast, We travel to Panjim City(20 km Travel)</li>
                        <li>Stay in Panjim.</li>
                        <li>Visit Nearest Church like Basilica of Bom Jesus church. Wall Of Street : Famous for Photoshot
                        </li>
                        <li>At Night Visit Big Daddy Casino. Dinner At Casino</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal4">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 4</b></h6>
                    <h4 style="color: #007bff">Visit North Goa and Night Life of goa</h4>
                    <ul>
                        <li>After BreakFast, Visit Famous Beaches Like Baga beach, Calangute Beach.</li>
                        <li>Option For visit Aghoda Fort or Dear Zindgi Road.</li>
                        <li>At night visit Baga beach and enjoying Night Life of Goa</li>
                        <li>Dinner At nearst Restaurant.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal5">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 5</b></h6>
                    <h4 style="color: #007bff">Visit Dudh-Sagar Waterfall and return Journey</h4>
                    <ul>
                        Depature Time : 6 : 00 AM<br>
                        Arrvial Time : 9 : 00 AM
                        <li> After Breakfast : Trek To reach Waterfall ( Trek Time 2 hour )</li>
                        <li> Return Trek And Dinner At Nearest Resturant.</li>
                        <li> Drop At Thivim Railway Station. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="mybook">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Your Package</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <a href="/Bookregistration" style="text-decoration: none; color:black">
                    <div class="book-pop">
                        <img src="{{ url('/img/goa.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Goa</h5>
                            <div style="display: flex; margin:15px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>18,500</p>
                                <p><i class="fa-regular fa-calendar-days fa-xs"
                                        style="color:black; margin-left:175px;"></i></i> 5 days / 4 night</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
