@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/london1.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Pattaya</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;" name="packageName">Thailand - Pattaya</h2>
            <p>Pattaya: A Snapshot of Thailand's Coastal Gem</p>
            <div class="d-flex">
                <div class="details-i" style="margin-left:0; ">
                    <i class="fa-solid fa-calendar-days fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Duration</p>
                        <p class="p2">6 days/5 Nights</p>
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
                        <p class="p2">18-40 years</p>
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
            <p style="color: rgb(111, 111, 111);">Pattaya, nestled along the Gulf of Thailand, emerges as a vibrant coastal
                city renowned for its <br>sun-kissed beaches, lively nightlife, and rich cultural tapestry. Once a humble
                fishing village,<br> Pattaya has evolved into a dynamic destination that captivates visitors with its blend
                of
                natural beauty <br>and urban excitement.</p>
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
                <div class="includedu">
                    <div class="includedu7">
                        <i class="fa-regular fa-id-card"></i>
                        <p>Visa</p>
                    </div>
                    <div class="includedu8">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Flight Ticket</p>
                    </div>
                </div>
            </div>
            {{-- <button data-bs-toggle="modal" data-bs-target="#mybook">Book Now</button> --}}
            <a href={{ route('Bookregistration', ['packagePrice' => $packagePrice, 'packageName' => $packageName]) }} class="btn btn-primary">Book Now</a>
        </div>
        <div class="datenote">
            <h6>Note:</h6>
            <ul>
                <li>This Package Valid for Every Month</li>
                <li><b>Departure Date :</b><span id="pattayadate"> 11th of every month</span></li>
                <li><b>Arriving Date :</b> 16th of every month</li>
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
                        <h4>Arrival in Bangkok</h4>
                        <p>Arrival at bangkok International Airport <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/pattaa.jpg') }}"
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
                        <h4>Pattaya</h4>
                        <p> Coral Island <a href="" data-bs-toggle="modal" data-bs-target="#myModal2">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/coral.jpg') }}"
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
                        <h4>Bangkok</h4>
                        <p> Combo: Tiger Park Visit <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/tiger.jpg') }}"
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
                        <h4>Bangkok</h4>
                        <p> Safari World - Safari Park & Marine Park with Lunch <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/safari.jpg') }}"
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
                        <h4>Bangkok City Tour</h4>
                        <p> Bangkok City Tour with Golden Buddha, Mini Reclining Buddha & Gems Gallery <a href=""
                                data-bs-toggle="modal" data-bs-target="#myModal5">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/golden.jpg') }}"
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
                        <h4>Departure from Bangkok</h4>
                        <p> Return Journey <a href="" data-bs-toggle="modal" data-bs-target="#myModal6">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6"
                            src="{{ url('/img/private_transfer.jpg') }}" alt="" height="350px" width="600px"
                            style="border-radius: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ditailsbook">
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 99,999/person</p>
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
                    <h4 style="color: #007bff">Arrival in Bangkok</h4>
                    <ul>
                        <li>Arrival at Bangkok International Airport.</li>
                        <li>Private Transfer to the Hotel</li>
                        <li>Check-in at your hotel and unwind.</li>
                        <li>Tour Manager Assistance</li>
                        <li>enjoy a delicious Indian Dinner. Overnight stay at the hotel in London/ LHR</li>
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
                    <h4 style="color: #007bff">Pattaya</h4>
                    <ul>
                        <li>Koh Larn (aka Coral Island) is a group of small islands located a
                            few miles off the coast of Pattaya. The island offers activities such as parasailing, jetski,
                            underwater sea-walk and snorkelling. The serene surroundings, crystal clear water, beautiful
                            beaches and extensive coral is what marks the beauty of this island. You can sit back and enjoy
                            the calmness of the beach while sipping some cool Coconut water and getting your feet massaged
                            We pick you up from your centrally located hotel in an air-conditioned vehicle and transfer you
                            to a speed-boat which takes you to the island.
                        </li>
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
                    <h4 style="color: #007bff">Bangkok</h4>
                    <ul>
                        <li>Pick up for Tiger Park.
                            Witness majestic big cats up-close at Tiger Park, Pattaya! With delightful sessions that allow
                            you to stroke, pet and take pictures with tigers, you are sure to enjoy a lot. As part of the
                            combo, you will also get comfortable inter-city transfers by a private vehicle from your hotel
                            in Pattaya to Bangkok. Pickup will be arranged only after confirmation of timings. Please reach
                            the hotel lobby for the transfer as per the given timings.</li>
                        <li>Pick up for Bangkok</li>
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
                    <h4 style="color: #007bff">Bangkok</h4>
                    <ul>
                        <li>A Prepare to be stunned at Thailand's greatest open zoo and leisure park - Safari World, which
                            is
                            sure to leave you entertained Witness dolphins, sea lions, orangutans and other sea mammals
                            perform stunts and tricks at the Marine Park with seven exciting shows organised daily. Get a
                            taste of the ultimate safari experience as you drive through the open zoo at Safari Park in your
                            own vehicle or in a luxury coach available at the venue. Make sure to catch the feeding show You
                            get an entrance ticket to Safari Park and Marine Park along with a delicious lunch. </li>
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
                    <h4 style="color: #007bff">Bangkok City Tour </h4>
                    <ul>
                        <li> A Historical Tour Around The Most Impressive Temples Of Bangkok. Experience the beauty of Thai
                            culture on this half-day Bangkok temples tour that showcases some of the city's most impressive
                            landmarks. See a massive solid gold Buddha at Wat Traimit and marvel at Reclining Buddha.
                            Afterwards, proceed to Gem galleries.</li>
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
                    <h4 style="color: #007bff">Departure</h4>
                    <ul>
                        <li>After breakfast, check-out from the hotel and head to the airport for your return flight home,
                            with a life time of wonderful memories of Thailand-Pattaya.
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
                        <img src="{{ url('/img/pattaya.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Thailand - Pattaya</h5>
                            <div style="display: flex; margin:15px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i> 99,999</p>
                                <p><i class="fa-regular fa-calendar-days fa-xs"
                                        style="color:black; margin-left:155px;"></i></i> 5 days / 4 night</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
