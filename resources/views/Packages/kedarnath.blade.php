@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/kedarnath-1.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Kedarnath & Chopta-Tungnath</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">Kedarnath & Chopta-Tungnath</h2>
            <p>Walking Towards God's Own Land</p>
            <div class="d-flex">
                <div class="details-i" style="margin-left:0; ">
                    <i class="fa-solid fa-calendar-days fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Duration</p>
                        <p class="p2">8 days/7 Nights</p>
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
                        <p class="p2">15-50 years</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-person-hiking fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Max Altitude</p>
                        <p class="p2">12,500ft</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5>About</h5>
            <p style="color: rgb(111, 111, 111);">Presenting you the most awaited trek to the ancient temple of 'Kedarnath'.
                The thirst of devotees to visit <br>this place, is what we thrive to fulfil. In India, one considers it a
                great achievement when Char Dham Yatra<br> is done and Kedarnath Temple plays a very crucial role in this
                Yatra.
                Captured between the Mountains,<br> the temple gives a surreal view with the Kedarnath and other peaks
                setting the background for the temple.<br> The journey towards Kedarnath is as beautiful as the temple, with
                green landscapes on your way. It is a <br>pilgrimage place that resembles 'the lord of the field'. The temple
                resides in the Rudraprayag district <br>of Uttarakhand state. It is dedicated to Lord Shiva and thus the devotees of
                'Lord Shiva' are driven here. </p>
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
            </div>
            {{-- <button data-bs-toggle="modal" data-bs-target="#mybook" >Book Now</button> --}}
            <a href={{ route('Bookregistration', ['packagePrice' => $packagePrice]) }} class="btn btn-primary">Book Now</a>
        </div>
        <div class="datenote">
            <h6>Note:</h6>
            <ul>
                <li>This Package Valid for Every Month</li>
                <li><b>Departure Date :</b><span id="kedardate"> 11th of every month</span></li>
                <li><b>Arriving Date :</b> 18th of every month</li>
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
                        <h4>Arrival at Haridwar & Night Stay</h4>
                        <p>Spending rest of the day for nearby Sightseeing<a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/haridwar.jpg') }}"
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
                        <h4>Departing from Haridwar/Rishikesh to Sitapur</h4>
                        <p> Night stay will be at Sitapur<a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal2">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/rishikesh.jpg') }}"
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
                        <h4>Trek to Kedarnath</h4>
                        <p> Night stay at Kedarnath BaseCamp <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/kedar-treak.jpg') }}"
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
                        <h4>Temple Visit & Return Journey</h4>
                        <p> Trek back to Gaurikund & Night stay at Sitapur <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/kedar-temple.jpg') }}"
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
                        <h4>Trek to Tungnath & Return</h4>
                        <p> Night Stay at Chopta <a href="" data-bs-toggle="modal" data-bs-target="#myModal5">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/tungnath.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 6</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Journey back to Haridwar</h4>
                        <p> Day for Return Journey <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal6">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6" src="{{ url('/img/jour.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 7</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Rishikesh Sightseeing</h4>
                        <p> Morning at Rishikesh for Adventure Activities & Sightseeing <a href=""
                                data-bs-toggle="modal" data-bs-target="#myModal7">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url('/img/lakshamn.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 8</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Departure</h4>
                        <p> Check-out Hotel And return Journey<a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal8">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal8" src="{{ url('/img/bus-depo.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ditailsbook">
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 12,700/person</p>
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
                    <h4 style="color: #007bff">Arrival at Haridwar & Night Stay</h4>
                    <ul>
                        <li>Arrival at Haridwar: 11:18 AM</li>
                        <li>After reaching at Haridwar, the day is left free for participants to explore Haridwar.</li>
                    </ul>
                    <h5 style="color: #007bff">Option :</h5>
                    <ul>
                        <li>In Evening visit a local restaurant for dinner.</li>
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
                    <h4 style="color: #007bff">Departing from Haridwar/Rishikesh to Sitapur</h4>
                    <ul>
                        <li>Departure Time: 05:00 AM</li>
                        <li>Time: 04:45 AM</li>
                        <li>Reporting Place: Chandi Chowk, Haridwar</li>
                        <li>Early morning, the camp will depart from Haridwar stay and will spend the whole day journey to
                            reach Sitapur. Meanwhile the journey, you will get a chance to experience the beautiful
                            Panchprayags. We will witness the famous Triveni Sangam, which is a confluence of three rivers
                            namely Kaveri, Bhavani and Amudha. Amudha is invisible and believed to have flowed underground
                            to reach the other two.</li>
                        <li>Night will be stayed at Sitapur. For rejuvenating and having the stock of energy to accomplish
                            the next day trek, the night falls early for the participants. It is advised to take proper rest
                            to prepare oneself for the next day trek.</li>
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
                    <h4 style="color: #007bff">Trek to Kedarnath</h4>
                    <ul>
                        <li>Gaurikund is located 6 km far from the Sitapur. We will travel from Sitapur to Gaurikund and
                            then strat the trek. Gurikund is starting point of the trek.</li>
                        <li>Trek distance: 17 km</li>
                        <li>Trek time: 8 to 10 hours</li>
                        <li>If our vehicles will not be allowed to go beyond Sitapur/Sonprayag then we will start trek from
                            Sitapur/Sonprayag (During Peak Season they not allowed personal Vehicles).</li>
                        <li>Participants have to register for Kedarnath Dham Visit at
                            https://registrationandtouristcare.uk.gov.in/signin.php by their own compulsory.</li>
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
                    <h4 style="color: #007bff">Temple Visit & Return Journey</h4>
                    <ul>
                        <li>Early Morning is heartly devoted to Morning Prayers. The power of the aura created during that
                            time is worth spending. The Temple Aarti at Kedarnath is well recommended to attain. It is a
                            never missing thing to do while spending time.</li>
                        <li>After spending time at Kedarnath Temple, we will start trekking back to Gaurikund. It takes
                            almost 6-7 hours to reach at Roadhead. After reaching Gaurikund we will travel back to Sitapur.
                        </li>
                        <li>hen we will travel to Chopta. It will take 2.5-3 hours to reach Chopta. The Night stay will be
                            at Sitapur.</li>
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
                    <h4 style="color: #007bff">Trek to Tungnath & Return</h4>
                    <ul>
                        <li>We will start trek toward Tungnath Temple in the Early Morning.</li>
                        <li>Tungnath is the hightest temple of Loard Shiva. Tungnath is the highest of the five Panch Kedar
                            temples located in the Rudraprayag district, in Uttarakhand. It is located at an altitude of
                            3,680 m (12,073 ft).</li>
                        <li>After visiting the Tungnath Temple we will return back to Chopta. Night stay will be at Chopta.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal6">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 6</b></h6>
                    <h4 style="color: #007bff">Journey back to Haridwar</h4>
                    <ul>
                        <li>The whole day is spent driving back to Haridwar.</li>
                        <li>The night stay will be in Hardiwar Hotel.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal7">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 7</b></h6>
                    <h4 style="color: #007bff">Rishikesh Sightseeing</h4>
                    <ul>
                        <li>Rishikesh Sightseeing & Adventure Activities</li>
                        <li>Major Attractions in Rishikesh (22 Kms from Haridwar)</li>
                        <li>Laxman Jhula,
                            Ram Jhula,
                            River Rafting,
                            Bungee Jumping (Advance Booking is mandatory on jumpingheights.com) there own.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal8">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 8</b></h6>
                    <h4 style="color: #007bff"></h4>
                    <ul>
                        <li>The Train will depart from Haridwar to New Delhi.</li>
                        <li>After Arrival at New Delhi Railway Station, you have to reach Old Delhi Junction by 02:30 PM.
                            The train will depart from Old Delhi Junction.
                        </li>
                        <li>Note:-you have to book your ticket from old-delhi to your home destination by own
                        </li>
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
                        <img src="{{ url('/img/kedarnath.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Kedarnath & Chopta-Tungnath</h5>
                            <div style="display: flex; margin:15px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>12,700</p>
                                <p><i class="fa-regular fa-calendar-days fa-xs"
                                        style="color:black; margin-left:175px;"></i></i> 8 days / 7 night</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
