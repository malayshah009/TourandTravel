@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/manali.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Kasol-Manali</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">Kasol-Manali</h2>
            <p>Lost Yourself In the God's Own Valley</p>
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
                        <p class="p2">12-50 years</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-person-hiking fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Max Altitude</p>
                        <p class="p2">10,000ft</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5>About</h5>
            <p style="color: rgb(111, 111, 111);">Manali is considered as God’s heaven. From majestic mountains to long
                rivers to aromatic forest and <br>an outstanding blend of the colours of nature, Manali has its all.Manali
                is also a pioneer of many aero <br> sports. In all Manali is a wholesome of refreshments and excitements.
                Kaso known as Mini Israel <br> because a major proportion of people here migrated from Israel. In all Kasol
                does leave an impact on <br>minds and soul and rejuvenates and living the moment fully. </p>
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
            {{-- <button data-bs-toggle="modal" data-bs-target="#mybook">Book Now</button> --}}
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
                        <h4>Arrival at Pathankot & Depart to Kasol</h4>
                        <p>Departure for Kasol in the Evening <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/kasol1.jpg') }}"
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
                        <h4>Day for Acclimatisation & Visit Manikaran Temple</h4>
                        <p> Group Activities, Preparation & Kasol Market Visit <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal2">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/manikaran.jpg') }}"
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
                        <h4>Travel to Manali & River Rafting</h4>
                        <p> Drive to Manali to prepare for the trek! <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/rafting.jpg') }}"
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
                        <h4>Trek to Advanced Basecamp</h4>
                        <p> Night stay at ABC(Advanced Base Camp) <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/trekking.jpg') }}"
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
                        <h4>Trek to Snow Point & Back</h4>
                        <p> Snow Trek & Returning to Naggar Camp <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal5">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/trekking1.jpg') }}"
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
                        <h4>Day for Manali Sightseeing & Paragliding</h4>
                        <p> Departure for Pathankot after Dinner <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal6">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6"
                            src="{{ url('/img/manali-mall-road.jpg') }}" alt="" height="350px" width="600px"
                            style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 7</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Pathankot Sigthseen</h4>
                        <p> Sightseen And relax <a href="" data-bs-toggle="modal" data-bs-target="#myModal7">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url('/img/pathan.jpg') }}"
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
                        <p> Check-out Hotel and return Journey <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal8">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal8" src="{{ url('/img/duairport.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ditailsbook">
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 11,500/person</p>
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
                    <h4 style="color: #007bff">Arrival at Pathankot & Depart to Kasol</h4>
                    <ul>
                        Arrival at Pathankot: 03:00 PM
                        Departure for Kasol: 08:00 PM
                        Arrival at Kasol: Around 8:00 AM, on next day<br>
                        <li>After reaching Pathankot, you will be asked to put your luggage into your vehicles and you will
                            get free time to visit the Pathankot Market till 8 PM. Your vehicles will leave from the
                            Pathankot Station Parking at sharp 8:30 PM.</li>
                        <li>We will travel overnight on the roads towards Kasol. The vehicles will take frequent halts
                            during the night for safe and comfortable journey.</li>
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
                    <h4 style="color: #007bff">Day for Acclimatisation & Visit Manikaran Temple</h4>
                    <ul>
                        Arrival at Kasol Campsite: 08:00 AM
                        <li>You will arrive at the Basecamp in the morning.</li>
                        <li>After Lunch, camp will depart for Manikaran & Kasol Market visit.</li>
                        <li>After the Dinner the Camp Leader and Senior Guide will brief you about the packing for the
                            upcoming days.</li>
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
                    <h4 style="color: #007bff">Travel to Manali & River Rafting</h4>
                    <ul>
                        <li>After Breakfast, camp will depart for Manali.</li>
                        <li>On the way, participants can do River Rafting and Paragliding(at own cost).</li>
                        <li>The Camp Leader will brief you about the Camper’s Store and you will be asked to deposit the
                            remaining luggage to a room.</li>
                        Night Stay at Manali Base Camp.
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
                    <h4 style="color: #007bff">Trek to Advanced Basecamp</h4>
                    <ul>
                        <li>From the BaseCamp, the trekking will start. After trekking for a few hours, you will reach the
                            advanced base camp where you will be allotted tents/Local Home.</li>
                        <li>It will also include campfire wherein you can sing, dance, share your stories, or just listen!
                            This will give you time talk to fellow trekkers and make bonds.</li>
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
                    <h4 style="color: #007bff">Trek to Snow Point & Back</h4>
                    <ul>
                        <li> Trek to Snow Point</li>
                        <li> Games & Snow Slides</li>
                        <li> After Playing in Snow Back to Naggar Campsite</li>
                        <li> DJ & Garba Party</li>
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
                    <h4 style="color: #007bff">Day for Manali Sightseeing & Paragliding</h4>
                    <ul>
                        <li>This day is kept free for participants to have a spending time at seeing the most amazing
                            attractions of the town.</li>
                        <li>This day is a cluster of various activities like paragliding and Manali sightseeing. The day
                            ends at Manali campsite following the dinner. It is recommended to all the participants to have
                            an experience of adventurous activities. If not, there are many other options to spend at Manali
                            while wandering through the local market, temples, waterfalls and much more.</li>
                        <li>The camp then drives back to Pathankot followed by dinner. While wandering through the
                            streets of the market, don’t miss out the famous local entities!</li>
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
                    <h4 style="color: #007bff">Pathankot Sightseeing</h4>
                    <ul>
                        <li>A day is reserev for sightseening of Pathankot.</li>
                        <li>In a day you visit nearby palces of pathankhot</li>
                        <li>Relax and rest day</li>
                        <li>In night dinner at Hotel</li>
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
                        <li>Check-out from the hotel and transfer for departure.
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
                        <img src="{{ url('/img/kasol.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Kasol-Manali</h5>
                            <div style="display: flex; margin:15px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>11,500</p>
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
