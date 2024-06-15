@extends('layouts.main2')
@section('main-contant')
    <div class="banner-bt">
        <img src="{{ url('/img/topabout.jpg') }}" alt="" width="100%" height="450px">

        <div class="abc-about">
            <h1>Participation Details</h1>
        </div>
    </div>

    <div class="bookregis">
        {{-- <div class="bookregisheader">
            <h3>Participation Details</h3>
        </div> --}}
        {{-- <div class="bookregismid">
            <h4 style="color: #007bff;">Dubai</h4>
            <p style="color: rgb(75, 75, 75)">Jun 12, 2024 to Jun 16, 2024 (8D/7N)</p>
        </div> --}}
        {{-- <div class="bookregisbtn">
            <h5>Select Participants</h5>
            <div tabindex="-1" role="group" class="bv-no-focus-ring box">
                <div class="btn-group d-flex d-md-inline-flex">
                    <button type="button" class="btn btn-primary sb1" fdprocessedid="f3hd3r" id='one'>1</button>
                    <button type="button" class="btn btn-default sb1" fdprocessedid="tgqhol" id='two'>2</button>
                    <button type="button" class="btn btn-default sb1" fdprocessedid="fgdu0a" id='three'>3</button>
                    <button type="button" class="btn btn-default sb1" fdprocessedid="7ot8du" id='four'>4</button>
                    <button type="button" class="btn btn-default sb1" fdprocessedid="qj67qk" id='five'>5</button>
                    <button type="button" class="btn btn-default" fdprocessedid="31ure">6</button>
                </div><!----><!----><!---->
            </div>
        </div> --}}
        <form action="/Bookregistration" method="post">
            @csrf
            <div class="bookregisform">
                {{-- <p style="color: #007bff">Select Package Where You like to Go</p>
                <select id="inputPackage" name="package" class="form-control @error('package') is-invalid @enderror"
                    value="{{ old('package') }}">
                    <option value="">National Package</option>
                    <option value="Kedarnath">Kedarnath</option>
                    <option value="Leh-Ladakh">Leh-Ladakh</option>
                    <option value="kasol-Manali">kasol-Manali</option>
                    <option value="Goa">Goa</option>
                    <option value="International Package">International Package</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Pattya">Pattya</option>
                    <option value="Singapore & Bali">Singapore & Bali</option>
                    <option value="London">London</option>
                </select>
                @error('package')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <input type="hidden" class="t1" name= "package" value={{ $packageName }}>
                <input type="hidden" class="t1" name= "package_price" value={{ $packagePrice }}>
                <div class="btnup"></div>
                <div class="selec">
                    <div class="selmon">
                        <p style="color: #007bff">Select Month</p>
                        <select id="inputMonth" name="month" class="form-control @error('month') is-invalid @enderror"
                            value="{{ old('month') }}">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        @error('month')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="selpass">
                        <p style="color: #007bff">Select How Many Passengers You Are</p>
                        <select id="inputpass" name="passenger"
                            class="form-control @error('passenger') is-invalid @enderror" value="{{ old('passenger') }}">
                            <option value="">Select How Many Passengers</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        @error('passenger')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="btnup"></div>
                <p style="color: #007bff">Participant 1</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti1_name">
                        @error('parti1_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti1_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        @error('parti1_bg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti1_mobile">
                        @error('parti1_mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti1_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('parti1_gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti1_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                        @error('parti1_age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="btnup"></div>
                <p style="color: #007bff">Participant 2</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti2_name">
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti2_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti2_mobile">
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti2_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti2_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                    </div>
                </div>
                <div class="btnup"></div>
                <p style="color: #007bff">Participant 3</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti3_name">
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti3_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti3_mobile">
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti3_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti3_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                    </div>
                </div>
                <div class="btnup"></div>
                <p style="color: #007bff">Participant 4</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti4_name">
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti4_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti4_mobile">
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti4_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti4_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                    </div>
                </div>
                <div class="btnup"></div>
                <p style="color: #007bff">Participant 5</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti5_name">
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti5_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti5_mobile">
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti5_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti5_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                    </div>
                </div>
                <div class="btnup"></div>
                <p style="color: #007bff">Participant 6</p>
                <div style="display: flex">
                    <div>
                        <h6>Full Name</h6>
                        <input type="text" class="t1" name = "parti6_name">
                    </div>
                    <div>
                        <h6>Blood Group</h6>
                        <select name = "parti6_bg">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div>
                        <h6>Mobile</h6>
                        <input type="text" class="t6" name="parti6_mobile">
                    </div>
                    <div>
                        <h6>Gender</h6>
                        <select name="parti6_gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <h6>Age</h6>
                        <select name = "parti6_age" class = "age">
                            <option value = "">Select Age</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                            <option value = "32">32</option>
                            <option value = "33">33</option>
                            <option value = "34">34</option>
                            <option value = "35">35</option>
                            <option value = "36">36</option>
                            <option value = "37">37</option>
                            <option value = "38">38</option>
                            <option value = "39">39</option>
                            <option value = "40">40</option>
                            <option value = "41">41</option>
                            <option value = "42">42</option>
                            <option value = "43">43</option>
                            <option value = "44">44</option>
                            <option value = "45">45</option>
                            <option value = "46">46</option>
                            <option value = "47">47</option>
                            <option value = "48">48</option>
                            <option value = "49">49</option>
                            <option value = "50">50</option>
                        </select>
                    </div>
                </div>
                <div class="btnup"></div>
                {{-- <a href={{ route('Bookregistration', ['packagePrice' => $packagePrice]) }}>
                    <button type="submit" class="btn btn-primary">Review<i
                            class="fa-solid fa-right-long fa-xs"></i></button>
                </a> --}}
                <button type="submit">Review<i class="fa-solid fa-right-long fa-xs"></i></button>
            </div>
    </div>
    </form>
    </div>

    {{-- <script>
        const button2 = document.getElementById('two');
        const button3 = document.getElementById('three');
        const button4 = document.getElementById('four');
        const button5 = document.getElementById('five');

        // let div2 =  document.getElementById('tform')
        // let div3 =  document.getElementById('forform')
        // let div4 =  document.getElementById('fivform')



        const showForm = () => {
            let div =  document.getElementById('sform')
            if(div.style.display === "block" ){
                    div.style.display = "none";
            }else{
                div.style.display = "block";
            }
        }
        const showForm2 = () => {
            let div2 =  document.getElementById('tform')
            if(div2.style.display === "block" ){
                    div2.style.display = "none";
            }else{
                div2.style.display = "block";
            }
        }

        const showForm3 = () => {
            let div3 =  document.getElementById('forform')
            if(div3.style.display === "block" ){
                    div3.style.display = "none";
            }else{
                div3.style.display = "block";
            }
        }

        const showForm4 = () => {
            let div4 =  document.getElementById('fivform')
            if(div4.style.display === "block" ){
                    div4.style.display = "none";
            }else{
                div4.style.display = "block";
            }
        }

        button2.addEventListener('click', showForm);
        button3.addEventListener('click', showForm2);
        button4.addEventListener('click', showForm3);
        button5.addEventListener('click', showForm4);
    </script> --}}
@endsection
