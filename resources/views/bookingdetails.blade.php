@extends('layouts.main')
@section('main-contant')
<div class="banner-bt">
    <img src="{{ url('/img/paymenttop.jpg') }}" alt="" width="100%" height="450px">

    <div class="abc-py">
        <h1>Booking Details</h1>
    </div>
</div>
<div style="margin:25px 100px; border:1px solid lightgrey; border-radius:5px;">
    <h1 style="text-align:center; margin:20px 0;">Booking Details</h1>
    <hr style="color:grey;">
    <div class="d-flex my-4" style="line-height : 1.5;">
        <div style="margin: 0 25px;">
            <label for="">passenger Name :</label>
            <label for="">malay shah</label><br>
            <label for="">Email :</label>
            <label for="">malayshah@gmail.com</label><br>
            <label for="">Phone :</label>
            <label for="">+91 9900996677</label><br>
        </div>
        <div style="margin: 0  0 0 600px;">
            <label for="">Booking Date :</label>
            <label for="">25/08/2024</label><br>
        </div>
    </div>
    <hr style="color:grey;">
    <h2 style="text-align:center; margin:25px 0;">Passenger Details</h2>
    <table class="table mb-5" >
        <thead class="table-active">
        <tr>
            <th>Sr.</th>
            <th>Passenger Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th></th>
            <th>Amount</th>
        </tr>
        </thead>
            <tr>
                <td>1</td>
                <td>Malay shah</td>
                <td>25</td>
                <td>Male</td>
                <td></td>
                <td>₹25000</td>
            </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <th class="table-active">Total Amount</th>
            <td class="table-active">₹25000</td>
        </tr>
    </table>
    {{-- <hr style="color:grey;">
    <div class="d-flex my-4">
        <div style="width:33.33%; margin-left:50px; ">
        <p><strong>ADDRESS :</strong></p>
        <p>VR MALL,  Vesu, VIP Street <br>
        Surat -395001, Gujarat</p>
        <p>Email: corporate@eyebeam.com <br>
        Contact Number: 9000909909 / 9000910910</p>
        </div>
        <div style="width:33.33%; margin:0 100px;">
          <p><strong>CUSTOMER SUPPORT :</strong></p>
          <p>Call / WhatsApp : +91 9900996677</p>
          <p>Email : support@eyebeam.com</p>
          <p>Time : 10:00 AM - 06:00 PM
            <br>( Monday-Saturday )</p>
        </div>
        <div style="width:33.33%">
        <p><strong>Thanks you for Your Purchase :</strong></p>
        <img src="../img/logo2.png" alt="" style="width:35%;">
        </div> --}}
    </div>
    </div>
    {{-- <button class="btn btn-primary" style="margin:-5px 10px 20px 100px; padding:7px 25px;">Payment</button> --}}
@endsection
