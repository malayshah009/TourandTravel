@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/leh.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Leh-Ladakh Road Trip</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">Leh-Ladakh Road Trip</h2>
            <p>A Journey Towards Heaven & back!</p>
            <div class="d-flex">
                <div class="details-i" style="margin-left:0; ">
                    <i class="fa-solid fa-calendar-days fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Duration</p>
                        <p class="p2">13 days/12 Nights</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-map fa-lg"></i>
                    <div class="details-p">
                        <p class="p1">Difficulty</p>
                        <p class="p2">Quite Difficult</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-user-group fa-lg"></i>
                    <div class="details-p">
                        <p class="p1">Age Group</p>
                        <p class="p2">18-35 years</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-person-hiking fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Max Altitude</p>
                        <p class="p2">18000ft</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5>About</h5>
            <p style="color: rgb(111, 111, 111);">The Ladakh capital city of Leh lies near the
                eastern parts of Jammu and Kashmir,on the crossroads of the <br>historic 'Silk Route'
                from Sinkiang to West Asia and to the plains of India.</p>
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
                <li><b>Departure Date :</b><span id="lehdate"> 11th of every month</span></li>
                <li><b>Arriving Date :</b> 23th of every month</li>
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
                        <h4>Arrival At Jammu</h4>
                        <p>Arrival at Jammu <a href="" data-bs-toggle="modal" data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/jammu.jpg') }}"
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
                        <h4>Journey From Jammu To Srinagar</h4>
                        <p> Shikhara Ride and Night Stay in Srinagar <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal2">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/shikha1.jpg') }}"
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
                        <h4>Day for Srinagar City Visit</h4>
                        <p> Sightseeing & Shopping <a href="" data-bs-toggle="modal" data-bs-target="#myModal3">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/sri1.jpg') }}"
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
                        <h4>Drive towards Kargil, Visit Sonamarg</h4>
                        <p> Night Stay in Kargil <a href="" data-bs-toggle="modal" data-bs-target="#myModal4">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/kargil.jpg') }}"
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
                        <h4>Departure for Leh via Kargil Visit</h4>
                        <p> Night Stay in Leh <a href="" data-bs-toggle="modal" data-bs-target="#myModal5">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/leh1.jpg') }}"
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
                        <h4>Day for Sightseeing in Leh</h4>
                        <p> Visit Local Places Nearby Leh <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal6">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6" src="{{ url('/img/leh_market.jpg') }}"
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
                        <h4>Journey Towards Pangong Lake</h4>
                        <p> Visit the most famous location in Leh <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal7">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url('/img/pankong.jpg') }}"
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
                        <h4>Travel to Nubra Valley</h4>
                        <p> Visit Khardungla Pass <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal9">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal9" src="{{ url('/img/nubra.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 9</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Return Journey towards Leh</h4>
                        <p> Evening Spent with Leh Market Visit <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal10">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal10" src="{{ url('/img/leh2.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 10</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Journey towards Zing Zing Bar</h4>
                        <p> Night Stay at Zing Zing Bar/Sarchu <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal11">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal11" src="{{ url('/img/zing.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 11</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Journey towards Manali</h4>
                        <p> Passing Through Attal Tunnel/Rohtang pass, Arrive at Manali Campsite <a href=""
                                data-bs-toggle="modal" data-bs-target="#myModal12">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal12" src="{{ url('/img/atal.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 12</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Manali Visit & Night Travel to Pathankot</h4>
                        <p> Day for Paragliding, Rafting & Sightseeing in Manali <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal13">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal13" src="{{ url('/img/rafting.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
                <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
                <div class="sr">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <h6><b>DAY 13</b></h6>
                    </div>
                    <div style="margin-left:20px; ">
                        <h4>Departure</h4>
                        <p> Check-out Hotel and return journey towards home <a href="" data-bs-toggle="modal"
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
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 26,000/person</p>
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
                    <h4 style="color: #007bff">Arrival in Jammu</h4>
                    <ul>
                        <li>Arrival at Jammu: 08:00 PM.</li>
                        <li>After Allotment of Accommodation, the volunteer will brief you about the next day schedule.</li>
                        <li> morning will be pleasant and picturesque as you will be in Punjab by then. The endless wheat
                            fields and striking cold will make you feel differently energised.</li>
                    </ul>
                    {{-- <h5 style="color: #007bff">Option :</h5> --}}
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
                    <h4 style="color: #007bff">Journey from Jammu to Srinagar</h4>
                    <ul>
                        <li>After breakfast, the camp leads to Srinagar. The drive takes almost 8 to 10 hours to reach the
                            destination.</li>
                        <li>Srinagar is one of most beautiful towns in the Kashmir Valley, The participants enjoy ride in
                            Shikara. Shikara is a boat sailing in Dal lake. This is the most breathtaking experience to
                            feel.</li>
                        <li>Food is Included from Jammu Breakfast to Manali Dinner.</li>
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
                    <h4 style="color: #007bff">Day for Srinagar City Visit</h4>
                    <ul>
                        <li>The participants cover many attractions in Srinagar and the whole day is spent as an outing for
                            City Visit.</li>
                        <li>Places to Visit</li>
                        <li>Hazratbal Shrine,
                            Pari Mahal,
                            Shankaracharya Temple,
                            Jamia Masjid,
                            Nishant Bagh,
                            Mughal Garden,
                            Chasme Shahi,
                            Botanical Garden.</li>
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
                    <h4 style="color: #007bff">Drive towards Kargil, Visit Sonamarg</h4>
                    <ul>
                        <li>This day after breakfast, the team leads to Sonamarg. The distance between Srinagar and Sonamarg
                            is
                            around 80 kms and it takes approximately three hours to reach Sonamarg.</li>
                        <li>Sonamarg is a hill station very famous for shooting.</li>
                        <li>Night will be spent at Kargil.</li>
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
                    <h4 style="color: #007bff">Departure for Leh via Kargil Visit</h4>
                    <ul>
                        <li>The day starts with delicious breakfast for the journey towards the majestic Leh. We drive
                            towards some attraction points nearby to capture some incredible scenario. While travelling we
                            get through Kargil border.</li>
                        <li>Main Attraction: 3rd Infantry Indian Army based at Drass.</li>
                        <li>The day ends with delicious dinner served at the Leh Hotel.</li>
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
                    <h4 style="color: #007bff">Day for Sightseeing in Leh</h4>
                    <ul>
                        <li>Leh has many worth seeing attractions for tourists. The whole day is kept free to cite such
                            locations. Number of monasteries is being visited during the sightseeing.</li>
                        <li>Yak tea, Momos, Siddu and Thupka are the famous delicacies to be eaten at Leh. A good
                            acclimatization will lead you a good journey and will allow to have unconventional experiences.
                        </li>
                        <li>Travelling is not Included on this day, Participants can experience a Bike Ride for Leh
                            Sightseeing.</li>
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
                    <h6><b>DAY 5</b></h6>
                    <h4 style="color: #007bff">Journey Towards Pangong Lake</h4>
                    <ul>
                        <li>Pangong Tso Lake is the most famous location in Leh. A whole day is kept free to have a
                            full-fledged scenery of lake. At the lake various team games do a delightful experience to add
                            to the trip.</li>
                        <li>Get the best scenic photos at Pangong. 3 idiot movie shot its climax at this lake.

                        </li>
                        <li>While returning, we pass through Changlag la that is the second highest motorable pass where
                            halt is taken to capture the view. The same day we drive back to Leh and have dinner at the
                            hotel.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal9">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 8</b></h6>
                    <h4 style="color: #007bff">Travel to Nubra Valley</h4>
                    <ul>
                        <li>The trip continues for a drive to Nubra Valley via Khardung La Pass. It is the world’s highest
                            motorable pass that is situated at approx. 18380 feet. All the passes are high altitude passes.
                        </li>
                        <li>We could reach the snowpoint at Nubra valley. The journey continues for Nubra valley. Before 2
                            kilometers to Nubra Valley, a hotel is been allocated to accommodate the participants. After 20
                            minutes, the camp leads to the sunset point via bus. The point is 2 kilometers away from the
                            hotel.</li>
                        <li>The camp can enjoy Camel Safari and can have most beautiful photos of the day at that point.
                            Dinner is been served at the hotel. This will be the most delicious dinner offered during the
                            trip specially to savour the taste of home. The night ends with a steaming campfire.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal10">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 9</b></h6>
                    <h4 style="color: #007bff">Return Journey towards Leh</h4>
                    <ul>
                        <li>Following breakfast, there is a back drive to Leh. We again get through Khardungla Pass if
                            traffic doesn’t hit the journey.<br>
                            Drive time: Around 6 hours
                        </li>
                        <li>After reaching Leh, sometimes uncertain, the rest of the time is kept free to wander into the
                            streets. Nepali and local traditional market is famous to explore.</li>
                        <li>Tasty dinner is been served in the market and participants prefer to eat at market while
                            informing at the hotel.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal11">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 10</b></h6>
                    <h4 style="color: #007bff">Journey towards Zing Zing Bar</h4>
                    <ul>
                        <li>Early morning, the camp will depart for Zing Zing Bar after breakfast. On the way, we visit some
                            places also. The dinner will be held at the spot following the night stay.</li>
                        <li>Zing Zing Bar is located at about 130 kms from Manali and 310 kms from Leh. Zing Zing bar shows
                            you its beauty at best in the months of March and April. The majestic views of snow clad
                            mountains is all seen while visiting the pass.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal12">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 11</b></h6>
                    <h4 style="color: #007bff">Journey towards Manali</h4>
                    <ul>
                        <li>After breakfast, the participants will be led back to Manali in travellers through road trip.
                        </li>
                        <li>While returning, there are many stay to look through varied attractions. Sarchu is the middle
                            point of Leh and Manali. Generally the oxygen level gets low and the temperature hits its
                            minimum. The air becomes thinner and we drive through worlds highest passes namely Rohtang La,
                            Bara Lach La, Lachu Lang La and Tanglag La. Dinner is been served at the Manali campsite.
                        </li>
                        <li>You will arrive back to Manali Campsite late night.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal13">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div id="pop">
                    <h6><b>DAY 12</b></h6>
                    <h4 style="color: #007bff">Manali Visit & Night Travel to Pathankot</h4>
                    <ul>
                        <li>This day is a cluster of various activities like paragliding, river rafting and Manali
                            sightseeing. The day ends at Manali campsite following the last dinner. It is recommended to all
                            the participants to have an experience of adventurous activities. If not, there are many other
                            options to spend at Manali while wandering through the local market, temples, waterfalls and
                            much more.<br>
                            Dispersing for activities: Morning around 8 AM<br>
                            Departing for Pathankot: Around 9 PM</li>
                        <li>We will return back to pathankot after having dinner at the campsite. There will be an overnight
                            journey to reach Pathankot the next morning.
                        </li>
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
                    <h6><b>DAY 13</b></h6>
                    <h4 style="color: #007bff">Departure</h4>
                    <ul>
                        <li>Morning : Leisure time for last-minute shopping or relaxation.</li>
                        <li>Afternoon : Check-out from the hotel and transfer to your return journey.
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
                        <img src="{{ url('/img/leh1.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Leh-Ladakh Road Trip</h5>
                            <div style="display: flex; margin:10px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i> 26,000</p>
                                <p><i class="fa-regular fa-calendar-days fa-xs"
                                        style="color:black; margin-left:155px;"></i></i>13 days / 12 night</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
