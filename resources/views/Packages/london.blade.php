@extends('layouts.main')
@section('main-contant')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="banner">
        <img src="{{ url('/img/london1.jpg') }}" alt="" width="100%" height="400px">
        <div class="abc2">
            <h1>London</h1>
        </div>
    </div>
    <div class="container d-flex pt-2" style="flex-wrap:wrap;">
        <div>
            <h2 style="color: #007bff;">London</h2>
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
                        <p class="p2">10-35 years</p>
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
            <p style="color: rgb(111, 111, 111);">London, the capital of the United Kingdom, is a dynamic global city
                renowned for its rich history, diverse<br> culture, and vibrant atmosphere. Situated along the banks of the
                iconic River Thames, London serves as<br> a melting pot of cultures, with inhabitants from all corners of
                the world contributing to its cosmopolitan flair.<br>From the historic landmarks such as the Tower of London
                and Buckingham Palace to the modern skyline<br> dominated by architectural marvels like The Shard, London
                seamlessly
                blends the old with the new.</p>
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
                <li><b>Departure Date :</b><span id="londondate"> 11th of every month</span></li>
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
                        <h4>Arrival in London</h4>
                        <p>Arrival at London International Airport <a href="" data-bs-toggle="modal"
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
                        <h4>London - Stratford upon Avon - Blackpool - Preston</h4>
                        <p> Visit palces of london <a href="" data-bs-toggle="modal" data-bs-target="#myModal2">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url('/img/satford.jpg') }}"
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
                        <h4>Preston - Bowness on Windermere - Edinburgh</h4>
                        <p> Visit preston - windermere etc... <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal3">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url('/img/perston.jpg') }}"
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
                        <h4>Edinburgh City Tour - Glasgow</h4>
                        <p> Edinburgh - Distillery / Castle city tour <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal4">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url('/img/Edinburgh.jpg') }}"
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
                        <h4>Loch Lomond Cruise & Nevis Range Gondola - Glasgow</h4>
                        <p> Cruise Dinner and Fort William - Nevis Range Gondola <a href="" data-bs-toggle="modal"
                                data-bs-target="#myModal5">Know More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url('/img/crusie.jpg') }}"
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
                        <h4>Glasgow - Train to London , London Eye</h4>
                        <p> Train to London <a href="" data-bs-toggle="modal" data-bs-target="#myModal6">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal6" src="{{ url('/img/glasglow.jpg') }}"
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
                        <h4>London City Tour & Madame Tussauds</h4>
                        <p> London City Tour <a href="" data-bs-toggle="modal" data-bs-target="#myModal7">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url('/img/london3.jpg') }}"
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
                        <h4>London - Windsor Castle - Lords Cricket Ground</h4>
                        <p> Lords Cricket Ground <a href="" data-bs-toggle="modal" data-bs-target="#myModal8">Know
                                More</a></p>
                        <img data-bs-toggle="modal" data-bs-target="#myModal8" src="{{ url('/img/lords.jpg') }}"
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
        <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 2,24,999/person</p>
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
                    <h4 style="color: #007bff">Arrival in London</h4>
                    <ul>
                        <li>Arrival at London International Airport.</li>
                        <li>Check-in at your hotel and unwind.</li>
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
                    <h4 style="color: #007bff">London - Stratford upon Avon - Blackpool - Preston</h4>
                    <ul>
                        <li>After a continental breakfast, you would head to Preston. En-route, you would visit Stratford
                            upon Avon, the quaint town which is known as the birthplace of the world-renowned play writer -
                            William Shakespeare. Here you would get some time for shopping as well as a chance to explore
                            the bars and public houses in one of the finest stone towns of England. Depart for Blackpool, a
                            seaside resort on the Irish Sea coast of England. It's known for its Beach, a stroll along the
                            promenade and a great opportunity to click some pictures. Later proceed to Preston for an Indian
                            Dinner and then set off to your hotel to retire for the night. Overnight at hotel in Preston.
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
                    <h4 style="color: #007bff">Preston - Bowness on Windermere - Edinburgh</h4>
                    <ul>
                        <li>After continental breakfast, check-out from the hotel as then you would proceed for a half-day
                            excursion to Lake District. You would be taken to the quaint town of Bowness-on-Windermere,
                            Windermere being the largest lake in the district. Here you would enjoy a cruise around the
                            mesmerizing islands of Lake Windermere which truly captures the essence of English countryside.
                            Next, you head towards Edinburgh, the Capital of Scotland.</li>

                        <li> Enjoy Dinner at an Indian restaurant Overnight at a hotel in Edinburgh.</li>
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
                    <h4 style="color: #007bff">Edinburgh City Tour - Glasgow</h4>
                    <ul>
                        <li>After Breakfast, proceed on a tour of The Scotch Whisky Experience / Distillery. Where you would
                            learn, experience the actual process and taste the flavour’s of Scotch Whisky. The perfect
                            journey through the world of Scotch Whisky.</li>
                        <li>Next you would proceed on a guided city tour by visiting the Edinburgh Castle, this castle was
                            built on the remains of an old volcano and is said to be haunted.
                            Edinburgh has been the capital of Scotland since the 15th Century and stands proudly on seven
                            hills creating the dramatic skyline of the city. You will also see Castle rock. where you can
                            hear the tales about the hangings that took place in the Grass market and the attempts to
                            capture Edinburgh Castle as you marvel at the impenetrable Castle Rock. Later, you could enjoy
                            some time to explore the city on your own. Later proceed for Dinner and an Overnight stay at a
                            Hotel in Glasgow.</li>
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
                    <h4 style="color: #007bff">Loch Lomond Cruise & Nevis Range Gondola - Glasgow</h4>
                    <ul>
                        <li>After Continental Breakfast, Spend the day at leisure Or you could opt for a full day optional
                            tour to Loch Lomond & Fort William - Nevis Range Gondola.</li>
                        <li>Depart for an excursion of Loch Lomond. A ‘loch’ is the Scottish name for a lake and Scotland
                            consists of many lochs that add to its natural charm and beauty. In this excursion, you would
                            get a chance to enjoy a scenic cruise on Loch Lomond.</li>
                        <li>Later you will continue to Fort William and enjoy the Nevis Range Gondola mountain experience.
                        </li>
                        <li>The gondola (cable car) is a fantastic experience, and you get great view of the great glen
                            (valley) and of Ben Nevis. After an exciting day you will proceed to Glasgow for Indian Dinner
                            and later to your Hotel in Glasgow.</li>
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
                    <h4 style="color: #007bff">Glasgow - Train to London , London Eye</h4>
                    <ul>
                        <li>After continental breakfast / Boxed Breakfast, proceed to experience a journey by train to
                            London. On arrival, enjoy a ride atop the famous London Eye. This attraction is situated in the
                            heart of London and from here you can get amazing panoramic views of the city, as well as sights
                            such as Westminster Bridge, Victoria Embankment and much more.</li>
                        <li> After an Indian Dinner, retire to the comforts of your hotel in London/LHR</li>
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
                    <h4 style="color: #007bff"> London City Tour & Madame Tussauds</h4>
                    <ul>
                        <li>After a buffet breakfast at the hotel, head out to witness the sights of London on a guided
                            sightseeing tour. The major sights you would see during this tour include: Buckingham Palace -
                            the office for the Head of State as well as the official residence of King Charles III,
                            Piccadilly Circus, Trafalgar Square, Big Ben, Houses of Parliament, Albert Memorial and various
                            other sights.</li>
                        <li> Next you would head out to experience the glittering world of fame at one of London's most
                            popular attractions, Madame Tussauds Wax Museum. Here, you would have the chance to see
                            super-realistic wax figures of your favourite stars from Hollywood and Bollywood as well as
                            other world-famous celebrities.</li>
                        <li> You will also have some time to shop to mark your trip to London.</li>
                        <li> Later, enjoy a delicious Indian Dinner and a comfortable overnight stay at the Hotel in London
                            /LHR</li>
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
                    <h4 style="color: #007bff">London - Windsor Castle - Lords Cricket Ground</h4>
                    <ul>
                        <li>After a buffet breakfast at the hotel, proceed to Windsor, a town on the river Thames in
                            southeast England, just west of London. It’s home to Windsor Castle. On arrival we visit the
                            Windsor Castle, a residence of the British Royal Family. Built by William the Conqueror in the
                            11th century, the castle was extensively remodeled by subsequent monarchs. Public tours take in
                            the State Apartments, which contain opulent furnishings, and paintings from the royal art
                            collection. Later explore this beautiful town on your own. Next, we proceed to the famed Lords
                            Cricket Ground, on arrival you will be taken on a guided tour of the stadium. After a wonderful
                            day we proceed for Indian Dinner. Overnight at Hotel in London /LHR.
                        </li>
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
                        <li>After breakfast, check-out from the hotel and head to the airport for your return flight home,
                            with a life time of wonderful memories of England & Scotland.
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
                        <img src="{{ url('/img/london1.jpg') }}" alt="" width="100px" height="100px">
                        <div style="margin:15px 10px 5px 10px">
                            <h5 style="color: #007bff">London</h5>
                            <div style="display: flex; margin:10px 0 0 0;">
                                <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>2,24,999</p>
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
