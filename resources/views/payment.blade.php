@extends('layouts.main')
@section('main-contant')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            border: 1px solid lightgrey;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            height: 500px;
            margin: 50px 75px;
            width: 100%;
            display: flex;
            padding: 0;
        }

        .container img {
            width: 500px;
            border-top-left-radius:5px;
            border-bottom-left-radius: 5px;
        }
        .odetails {
            margin: 0 20px;
        }

        .btn-warning .p1,
        .p1 i {
            color: blue;
        }

        .btn-warning .p2 {
            color: rgb(3, 189, 235);
        }

        h4 {
            padding: 50px 0 0 12px;
        }

        th,
        td {
            padding: 10px 40px;
            text-align: center;
        }
        .bt {
            padding: 0 0 0 12px;
        }
        .modal-body input{
            margin: 10px 0;
            width:100%;
            padding:5px 10px;
            border: 1px solid rgb(150, 150, 150);
            border-radius: 5px;
        }
        button{
            margin: 5px 0;
        }

    </style>
    <div class="banner-bt">
        <img src="{{ url('/img/py.jpg') }}" alt="" width="100%" height="450px">

        <div class="abc-py">
            <h1>Payment</h1>
        </div>
    </div>
    <div class="container">
        <img src="{{ url('/img/condp1.jpg') }}">
        <div class="odetails">
            <h4>Ticket Payment :</h4>
            <hr>
            <div style='display:flex;'>
                <h5 style='margin :  0 0 0 15px;'>Total Price:</h5>
                <b style='margin :  0 0 0 300px;'>   ₹{{ $bookregis->total_payment }}</b>
                {{-- <input class="t1" name= "package_price" value={{ $packagePrice }}> --}}

            </div>
            <hr>
            <div class="bt">

                <h5>INSERT YOUR UPI ID</h5>
                {{-- action = "/bookingdetails" method = "get" --}}
                <form>
                    <div class="modal-body">
                        {{-- <input type="text"  placeholder="SBIKIOSK@123"
                            pattern = "^[a-zA-Z0-9.-]{2, 256}@[a-zA-Z][a-zA-Z]{2, 64}$"
                            title = "Please insert Vallid UPI id" name = "upiid" required> --}}
                    </div>
                    <a href="{{ route('payment', ['packagePrice' => $bookregis->package_price]) }}" class="btn btn-primary" name="btnOrder">Pay Now</a>
                </form>
            </div>
        </div>

    </div>
@endsection
