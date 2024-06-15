@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/singpore2.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>Singapore & Bali</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">Singapore & Bali With 02 Night Cruise</h2>
            <p>Living like the royals!</p>
            <div class="d-flex">
                <div class="details-i" style="margin-left:0; ">
                    <i class="fa-solid fa-calendar-days fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Duration</p>
                        <p class="p2">9 days/8 Nights</p>
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
                        <p class="p2">10-45 years</p>
                    </div>
                </div>
                <div class="details-i">
                    <i class="fa-solid fa-person-hiking fa-xl"></i>
                    <div class="details-p">
                        <p class="p1">Max Altitude</p>
                        <p class="p2">5500ft</p>
                    </div>
                </div>
            </div>
            <hr>
            <h5>About</h5>
            <p style="color: rgb(111, 111, 111);">Singapore, a gleaming jewel of Southeast Asia, and Bali, Indonesia's famed
                Island of the Gods, stand as <br>contrasting yet complementary destinations, each offering a unique tapestry
                of culture, nature, and allure.<br>
                Singapore, a bustling city-state at the crossroads of the world, captivates visitors with its futuristic
                skyline,<br> impeccable cleanliness, and multicultural charm. From the iconic Marina Bay Sands to the
                verdant Gardens by<br> the Bay, Singapore seamlessly blends modernity with tradition. Its vibrant
                neighborhoods like
                Chinatown,<br> Little India, and Arab Street offer a sensory feast of sights, sounds, and flavors, while its
                efficient public<br> transportation system makes exploration a breeze.</p>
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
            <a href={{ route('Bookregistration', ['packagePrice' => $packagePrice]) }} class="btn btn-primary">Book Now</a>
        </div>
        <div class="datenote">
            <h6>Note:</h6>
            <ul>
                <li>This Package Valid for Every Month</li>
                <li><b>Departure Date :</b><span id="singaporedate"> 11th of every month</span></li>
                <li><b>Arriving Date :</b> 19th of every month</li>
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
                        <h4>Arrival in Denpasar Bali</h4>
                        <p>Arrival at Denpasar International Airport <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal1">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url('/img/duairport.jpg') }}"
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
                        <h4>Kintamani, Tegenungan Waterfall Tour and Bali Swing</h4>
                        <p> Visting Celuk Village <a href="" data-bs-toggle="modal" data-bs-target="#myModal2">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/swing.jpg') }}"
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
                        <h4>Ulun Danu Temple, Handara Gate, Twin Lakes</h4>
                        <p> Banyumala Waterfall and Wanagiri Hidden Hills etc... <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/danu.jpg') }}"
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
                        <h4>Arrival in Singapore</h4>
                        <p> Watersports, Sunset at Uluwatu Temple, Kecak Dance and Indian Dinner <a href=""
                                data-bs-toggle="modal" data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/singa.jpg') }}"
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
                        <h4>Singapore</h4>
                        <p> Sea Aquarium and Universal Studios <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal5">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/singa3.jpg') }}"
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
                        <h4>Singapore Cruise</h4>
                        <p> Cruise... <a href="" data-bs-toggle="modal" data-bs-target="#myModal6">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6" src="{{ url('/img/crusie1.jpg') }}"
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
                        <h4>Singapore Cruise</h4>
                        <p> Cruise... <a href="" data-bs-toggle="modal" data-bs-target="#myModal7">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url('/img/crusie1.jpg') }}"
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
                        <h4>Singapore</h4>
                        <p> Relaxtion After a crusie holiday <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal8">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal8" src="{{ url('/img/relax.jpg') }}"
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
                        <h4>Depature</h4>
                        <p> Return to home <a href="" data-bs-toggle="modal" data-bs-target="#myModal9">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal9" src="{{ url('/img/duairport.jpg') }}"
                            alt="" height="350px" width="600px" style="border-radius: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ditailsbook">
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 1,44,999/person</p>
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
                    <h4 style="color: #007bff">Arrival in Denpasar</h4>
                    <ul>
                        <li>Arrival at Denpasar International Airport.</li>
                        <li>Check-in at your hotel and unwind.</li>
                        <li>enjoy a delicious Indian Dinner. Overnight stay at the hotel in Bali</li>
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
                    <h4 style="color: #007bff">Kintamani, Tegenungan Waterfall Tour and Bali Swing</h4>
                    <ul>
                        <li>Visting Celuk Village, It is known for its art of gold and silver smithing, and is one of the
                            main centers of the island's metalworking industry. It is also home to a vibrant art scene, with
                            many galleries and workshops showcasing local art. Then continue to visit Mas Village which also
                            known as a central of wodcarving by the local artisant. Afterward, continue to visit KIntamani.
                            It is situated on the western side of the active volcano Mount Batur and the surrounding
                            caldera. It is one of the most popular tourist destinations in Bali, known for its sweeping
                            views of Mount Batur and Lake Batur, as well as its traditional Balinese culture. Next
                            destination, visiting Tegenungan Waterfall. The waterfall is fed by the Petanu River and is
                            surrounded by lush tropical rainforest. Afterward, you will continue to enjoy Swing. The Best
                            Swing in the Tegallalang area (Aloha Swing), with spectacular rice paddies view, agriculture
                            activities.
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
                    <h4 style="color: #007bff">Ulun Danu Temple, Handara Gate, Twin Lakes, Banyumala Waterfall and Wanagiri
                        Hidden Hills</h4>
                    <ul>
                        <li>Indulge in a full-day tour across Bali's most picturesque landmarks Begin your excursion with a
                            visit to Pura Ulun Danu Beratan, a beautiful temple complex situated on the banks of Beratan
                            Lake. Soak up the enchanting views and breathe in the serene air as you explore the place. Click
                            some photos for your social media and then make your way to Handara Gate. Strike your best poses
                            against the huge stone pillars surrounded by lush mountains Next, visit the Wanagiri Hills, a
                            quaint spot with spectacular selfie points overlooking the twin lakes - Lake Tamblingan and Lake
                            Buyan. Lastly, you will visit the Banyumala Waterfall, a hidden gem in Bali. Follow the dirt
                            track that leads you across the jungle to reach the waterfall. Jump into the natural pool and
                            have fun. Note: Private transfers from South Bali and Ubud Hotel included.</li>
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
                    <h4 style="color: #007bff">Arrival in Singapore</h4>
                    <ul>
                        <li>Get set for a fun day out in Bali First, head to Tanjung Benoa and enjoy thrilling watersports.
                            Zoom through the pristine waters on a Jet Ski, indulge in a banana boat ride and soar 800 feet
                            high in the sky with parasailing Next, visit the mesmerising Uluwatu Temple. Situated at the
                            edge of a cliff overlooking the Indian Ocean, the view from here is magical Spend some time
                            taking in the scenic beauty of the place and then experience a traditional Kecak Dance
                            performance. Narrating a battle from the epic of Ramayana, the dance is an energetic display of
                            rhythm and harmony performed around sunset. Your awesome day comes to an end with a delectable
                            Indian dinner at Jimbaran Bay. Note: Private transfers for South Bali hotels included. The
                            banana boat ride can seat up to 6 pax and the jet ski can seat only 1 passenger.</li>
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
                    <h4 style="color: #007bff">Singapore</h4>
                    <ul>
                        <li>Get ready for a day full of fun, adventure and unforgettable experiences Start with a visit to
                            the S.E.A Aquarium and explore the different zones that represent different oceans of the world.
                            Delight at the sight of exotic species, spot coral reefs, giant crabs, hammerhead sharks and
                            more The aquarium is home to more than 1,00,000 marine animals across 50 habitats and is sure to
                            be a fascinating visit. Continue the fun, as you head to Southeast Asia's first and only
                            Universal Studios Featuring 24 rides, shows and attractions in seven themed zones, this theme
                            park is the perfect destination to spend some quality time with your family. Schedule: 09:00 -
                            19:30 Note: Shared transfers included.</li>
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
                    <h4 style="color: #007bff">Singapore Cruise</h4>
                    <ul>
                        <li>Private Transfers from Singapore Hotel to Cruise Terminal (7 AM to 10 PM)</li>
                        <li>Check-in to Hotel in Central Water Catchment @ 3 PM</li>
                        <li>lunch & Dinner : Included at Genting Dream , Singapore Cruise</li>
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
                    <h4 style="color: #007bff">Singapore Cruise</h4>
                    <ul>
                        <li>Lunch & Dinner : Included at Genting Dream , Singapore Cruise</li>
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
                    <h4 style="color: #007bff">Singapore</h4>
                    <ul>
                        <li>After a end of crusie back to hotel with private transport
                        </li>
                        <li>Rest Day and dinner At hotel</li>
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
                    <h6><b>DAY 9</b></h6>
                    <h4 style="color: #007bff">Departure</h4>
                    <ul>
                        <li>After breakfast, check-out from the hotel and head to the airport for your return flight.</li>
                        <li>Private Transfer from Singapore Hotel to Singapore Airport</li>
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
                        <img src="{{ url('/img/singpore2.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">Singapore & Bali</h5>
                            <div style="display: flex; margin:10px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>1,44,999</p>
                                <p><i class="fa-regular fa-calendar-days fa-xs"
                                        style="color:black; margin-left:155px;"></i></i> 9 days / 8 night</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
