@extends('layouts.main')
@section('main-contant')
    <div class="conbg">
        <div class="banner-bt">
            <img src="{{ url('/img/topcon2.jpg') }}" alt="" width="100%" height="450px">

            <div class="abc-about">
                <h1>Contact Us</h1>
            </div>
        </div>
        <h6 style="margin: 10px 75px;"> <a href="/">Home </a> / Contact Us</h6>
        <div class="line"></div>
        <div class="main-con">
            <img src="{{ url('/img/condp3.jpg') }}" alt="" width="500px" height="500px">
            <div class="confeed">
                <form action="/contactus" method="post">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="email">Enter Your Name :</label>
                        <input type="text" class="form-control" id="name" name="name" size="75" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Enter Your Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd">Enter Your Comment :</label>
                        <textarea class="form-control ta" name="comment" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <p class="map"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13100.3238884342!2d72.77013997068326!3d21.14361385287623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dff522fd35f%3A0xdb918be77714222b!2sAmazing%20Travel%20Agency!5e0!3m2!1sen!2sin!4v1714897984613!5m2!1sen!2sin"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    <hr>
    <div class="container contact">
        <div class="contact-a">
            <h5>Please Do Get In Touch!</h5>
            <p>We'd love to hear from you - Please use the form to send us your message or ideas.</p>
            <p>Abhishek park B, opp. Someshwar Square Road, <br>
                Surat -395007,<br>
                Gujarat</p>
            <p>Email: reservation@hmtravel.com <br>
                Contact Number: 9000909909 / 9000910910</p>
            <div class="line-b"></div>
            <p style="padding:10px 0;">OPENING HOURS: <br>
                Monday to Saturday : 10 am - 10 pm <br>
                Sundays : 11 am - 9 pm</p>
        </div>
        <div class="contact-b"><img src="{{ url('/img/confind.png') }}" alt="" height="400px" width="100%"></div>
    </div>
    <hr>
    <div class="d-flex container">
        <div class="sizechart">
            <img id="sizeimg" class="sc" src="{{ url("/img/review.webp") }}" alt="size chart" height="450px" width="375px">
        </div>
        <div class="review-form">
            <form action="/contact" method="post" enctype="multipart/form-data">
                @csrf
                <h3>Write a Review</h3>
                <h6 style="margin : 10px 0 5px 0;">Rating</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratings" id="ratings" value="1" required>
                    <label class="form-check-label" for="ratings" name = "1"> 1 </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratings" id="ratings" value="2" required>
                    <label class="form-check-label" for="ratings" name="2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratings" id="ratings" value="3" required>
                    <label class="form-check-label" for="ratings" name="3">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratings" id="ratings" value="4" required>
                    <label class="form-check-label" for="ratings" name="4">4</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratings" id="ratings" value="5" required>
                    <label class="form-check-label" for="ratings" name="5">5</label>
                </div>

                <h6 style="margin : 10px 0 10px 0;">Review Title</h6>
                <input name="rtitle" type="text" class="rt">
                <h6 style="margin : 15px 0 10px 0;">Review</h6>
                <textarea name="review" cols="50" rows="5"></textarea>
                <input type="file" class="form-control" accept="image/jpeg, image/png, image/jpg" name="rimg"
                    style="margin:10px 0 0 142px;"></input>
                <div class="my-3">
                    <button type="submit" class="btn btn-outline-primary px-5 py-2" name="btnCancel">Cancle Review</button>
                    <button type="submit" class="btn btn-primary px-5 py-2" name="btnReview">Submit Review</button>
                    <input type= "hidden" name = "pro_id" value = "">
                </div>
            </form>

        </div>
    </div>
    <hr>
    <div class="congallery">
        <img src="{{ url('/img/gallery1.jpg') }}" alt="" width="auto" height="322px">
        <img src="{{ url('/img/gallery2.jpg') }}" alt="" width="auto" height="322px">
        <img src="{{ url('/img/gallery3.jpg') }}" alt="" width="auto" height="322px">
        <img src="{{ url('/img/gallery4.jpg') }}" alt="" width="auto" height="322px">
        <img src="{{ url('/img/gallery5.jpg') }}" alt="" width="auto" height="322px">
    </div>
    <hr>
@endsection
