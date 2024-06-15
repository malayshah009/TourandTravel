@extends('layouts.main')
@section('main-contant')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="banner">
    <img src="{{ url("/img/du2.jpg") }}" alt="" width="100%" height="400px">
    <div class="abc2">
        <h1>Dubai</h1>
    </div>
</div>
<div class="container d-flex pt-2" style="flex-wrap:wrap;">
    <div>
        <h2 style="color: #007bff;">Dubai</h2>
        <p>A Journey Towards Heaven & back!</p>
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
                    <p class="p2">10-35 years</p>
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
        <p style="color: rgb(111, 111, 111);">Dubai is a key financial and trading hub, and
        one of the fastest growing cities in the world. Helped by <br>its strategic geographical
        location and “exceptional infrastructure”, Dubai has emerged as a prominent <br>global
        trading city connecting markets around the world.</p>
    </div>
    <div class="details-ts">
        <div class="details-r">
            <i class="fa-solid fa-indian-rupee-sign fa-xl"></i><h3>{{ $packagePrice }}</h3><p>/person</p>
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
                    <h4>Arrival in Dubai</h4>
                    <p>Arrival at Dubai International Airport <a href="" data-bs-toggle="modal" data-bs-target="#myModal1">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal1" src="{{ url("/img/duairport.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 2</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Old Dubai Exploration</h4>
                    <p> Visit Old Dubai Museum and Market <a href="" data-bs-toggle="modal" data-bs-target="#myModal2">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal2" src="{{ url("/img/olddubai.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 3</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Modern Dubai Highlights</h4>
                    <p> Visit Burj Khalifa and Dubai Mall <a href="" data-bs-toggle="modal" data-bs-target="#myModal3">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal3" src="{{ url("/img/burjk.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 4</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Desert Safari Adventure</h4>
                    <p> Camel Riding and desert camping <a href="" data-bs-toggle="modal" data-bs-target="#myModal4">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal4" src="{{ url("/img/deserts2.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 5</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Palm Jumeirah and Marina</h4>
                    <p> Cruise Dinner and City Skyline <a href="" data-bs-toggle="modal" data-bs-target="#myModal5">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal5" src="{{ url("/img/palm.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 6</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Cultural Immersion</h4>
                    <p> Abu Dhabi or Qasr Al Watan <a href="" data-bs-toggle="modal" data-bs-target="#myModal6">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal6" src="{{ url("/img/abud.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
            <div style="border-bottom: 2px solid lightgrey; width:110%; margin:15px 0 10px 20px;"></div>
            <div class="sr">
                <div class="d-flex">
                    <div class="dot"></div>
                    <h6><b>DAY 7</b></h6>
                </div>
                <div style="margin-left:20px; ">
                    <h4>Theme Parks and Entertainment</h4>
                    <p> Dubai Parks and Resorts <a href="" data-bs-toggle="modal" data-bs-target="#myModal7">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal7" src="{{ url("/img/duframe.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
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
                    <p> Check-out Hotel <a href="" data-bs-toggle="modal" data-bs-target="#myModal8">Know More</a></p>
                    <img data-bs-toggle="modal" data-bs-target="#myModal8" src="{{ url("/img/duairport.jpg") }}" alt="" height="350px" width="600px" style="border-radius: 10px">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ditailsbook">
    <p>From <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> 54,999/person</p>
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
            <h4 style="color: #007bff">Arrival in Dubai</h4>
            <ul>
                <li>Arrival at Dubai International Airport.</li>
                <li>Check-in at your hotel and unwind.</li>
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
            <h4 style="color: #007bff">Old Dubai Exploration</h4>
            <ul>
                <li>Morning : Visit Al Fahidi Historical Neighbourhood and Dubai Museum.</li>
                <li>Afternoon : Explore the Gold Souk and Spice Souk in Deira.</li>
                <li>Evening : Take an Water Taxi ride across Dubai Creek and have dinner
                    at a traditional Arabic restaurant in the area.</li>
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
            <h4 style="color: #007bff">Modern Dubai Highlightsn</h4>
            <ul>
                <li>Morning : Visit the Observation deck of Burj Khalifa.</li>
                <li>Afternoon : Explore the Dubai Mall, including Dubai Aquarium & Underwater Zoo</li>
                <li>Evening : Watch the Dubai Fountain Show outside The Dubai Mall,
                    followed by dinner at a restaurant overlooking the fountain.</li>
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
            <h4 style="color: #007bff">Desert Safari Adventure</h4>
            <ul>
                <li>Morning : Relax and enjoy leisure time at the hotel.</li>
                <li>Afternoon : Embark on a dest safari for dune bashing, camel riding and
                    sandboarding</li>
                <li>Evening : Experience a traditional Arabian dinner and entertainment at
                    a desert camp.</li>
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
            <h4 style="color: #007bff">Palm Jumeirah and Marina</h4>
            <ul>
                <li>Morning : Vist Plam Jumeirah and Atlantis, The Palm.</li>
                <li>Afternoon : Enjoy lunch at a restaurant on The Palm or at Dubai Marina.</li>
                <li>Evening : Take a cruise dinner in Dubai Marina and admire the city
                    skyline from the water.</li>
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
            <h4 style="color: #007bff">Cultural Immersion</h4>
            <ul>
                <li>Morning : Visit Sheikh Zayed Grand Mosque in Abu Dhabi.</li>
                <li>Afternoon : Explore Louvre Abu Dhabi or Qasr Al Watan(Presidential Place).</li>
                <li>Evening : Return to Dubai and have dinner at a local Emirati Resturant.</li>
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
            <h4 style="color: #007bff">Theme Parks and Entertainment</h4>
            <ul>
                <li>Morning : Visit Dubai Frame and IMG Worlds of Advanture or Dubai Parks and Resorts.</li>
                <li>Afternoon : Enjoy lunch at one of the theme parks.</li>
                <li>Evening : Explore Global Village, an outdoor cultural and entertainment destination.</li>
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
                <li>Morning : Leisure time for last-minute shopping or relaxation.</li>
                <li>Afternoon : Check-out from the hotel and transfer to Dubai International Airport for departure.</li>
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
                    <img src="{{ url("/img/du.jpg") }}" alt="" width="100px" height="100px">
                    <div style="margin:15px 10px 5px 10px">
                        <h5 style="color: #007bff">Dubai</h5>
                        <div style="display: flex; margin:15px 0 0 0;">
                            <p><i class="fa-solid fa-indian-rupee-sign fa-xs" style="color: black"></i>24,999</p>
                            <p><i class="fa-regular fa-calendar-days fa-xs" style="color:black; margin-left:175px;"></i></i> 8 days / 7 night</p>
                        </div>
                    </div>
                </div>
            </a>
      </div>
    </div>
</div>

@endsection


