<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></Script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <style>
        .db{
            width:31%;
            border:1px solid lightgrey;
            border-radius:10px;
            margin:30px 15px 0 15px;
            text-align:center;
            padding: 62px 0;
            text-decoration:none;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.05), 0 6px 20px 0 rgba(0, 0, 0, 0.05);
        }
        h2{
            margin: -12px 0;
        }
        p{
            margin-top:-10px;
        }
    </style>
    <title>Admin</title>
</head>
<body>
    <div class="admin-nav">
        <div class="admin-navimg">
            <a href="/admin">
                <img src="{{ '/img/hmlogow.png' }}" alt="Logo" width="100%" height="50px">
            </a>
        </div>
        <div class="admin-nava">
            <a href="/user">User</a>
            <a href="/feedback" >Feedback</a>
            <a href="/review">Review</a>
            <a href="/package" >Package</a>
            <a href="/bookregisdata">BookingDetails</a>

        </div>
        @if(session()->has('id'))
                <a href="/logout">Logout</i></a>
                @else
                <a href="/login"><i class="fa fa-user"></i></a>
                @endif
    </div>
    <div class="d-flex">
        <a class="db" href="{{ '/user' }}">
        <div style="color:blue;">
                <i style="color:blue;" class="fa-solid fa-user fa-3x" ></i>
                <h1>{{ $usercount }}</h1>
                <h2>Users</h2>
        </div>
        </a>
        <a class="db" href="{{ '/review' }}">
        <div style="color:Gold;">
                <i style="color:Gold;" class="fa-solid fa-star fa-3x"></i>
                <h1>{{ $reviewcount }}</h1>
                <h2>Reviews</h2>
        </div>
        </a>
        <a class="db" href="{{ '/feedback' }}">
        <div style="color:Red;">
                <i style="color:Red;" class="fa-solid fa-clipboard-list fa-3x" ></i>
                <h1>{{ $contactcount }}</h1>
                <h2>Feedbacks</h2>
        </div>
        </a>
    </div>
    <div class="d-flex">
        <a class="db" href="{{ '/package' }}">
            <div style="color:Orange;">
            <i style="color:Orange;" class="fa-solid fa-box-archive fa-3x"></i>
            <h1>{{ $packagecount }}</h1>
                <h2>Packages</h2>
            </div>
        </a>
        <a class="db" href="{{ '/bookregisdata' }}">
            <div style="color:blue;">
            <i style="color:blue;" class="fa-solid fa-clipboard-list fa-3x"></i>
            <h1>{{ $regiscount }}</h1>
                <h2>Booking Details</h2>
        </div>
        </a>
    </div>

</body>
</html>
