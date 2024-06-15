<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#mytable5").dataTable();
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></Script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        th,
        td {
            margin: 20px;
        }
    </style>
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
    <h1 class="container-fluid text-center my-3">Booking Details</h1>
    <div>
        <table id="mytable5" class="table">
            <thead class="table-primary">
                <tr style="Background :blue;">
                    <th>Sr No.</th>
                    <th>Package</th>
                    <th>Month</th>
                    <th>Parti1 Name</th>
                    <th>Parti1 BloodGroup</th>
                    <th>Parti1 MobileNo</th>
                    <th>Parti1 Gender</th>
                    <th>Parti1 Age</th>
                    <th>Parti2 Name</th>
                    <th>Parti2 BloodGroup</th>
                    <th>Parti2 MobileNo</th>
                    <th>Parti2 Gender</th>
                    <th>Parti2 Age</th>
                    <th>Parti3 Name</th>
                    <th>Parti3 BloodGroup</th>
                    <th>Parti3 MobileNo</th>
                    <th>Parti3 Gender</th>
                    <th>Parti3 Age</th>
                    <th>Parti4 Name</th>
                    <th>Parti4 BloodGroup</th>
                    <th>Parti4 MobileNo</th>
                    <th>Parti4 Gender</th>
                    <th>Parti4 Age</th>
                    <th>Parti5 Name</th>
                    <th>Parti5 BloodGroup</th>
                    <th>Parti5 MobileNo</th>
                    <th>Parti5 Gender</th>
                    <th>Parti5 Age</th>
                    <th>Parti6 Name</th>
                    <th>Parti6 BloodGroup</th>
                    <th>Parti6 MobileNo</th>
                    <th>Parti6 Gender</th>
                    <th>Parti6 Age</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($bookregisdata as $bookregisdata)
            <tr>
                    <td>{{ $bookregisdata->id }}</td>
                    <td>{{ $bookregisdata->package }}</td>
                    <td>{{ $bookregisdata->month }}</td>
                    <td>{{ $bookregisdata->parti1_name }}</td>
                    <td>{{ $bookregisdata->parti1_bg }}</td>
                    <td>{{ $bookregisdata->parti1_mobile }}</td>
                    <td>{{ $bookregisdata->parti1_gender }}</td>
                    <td>{{ $bookregisdata->parti1_age }}</td>
                    <td>{{ $bookregisdata->parti2_name }}</td>
                    <td>{{ $bookregisdata->parti2_bg }}</td>
                    <td>{{ $bookregisdata->parti2_mobile }}</td>
                    <td>{{ $bookregisdata->parti2_gender }}</td>
                    <td>{{ $bookregisdata->parti2_age }}</td>
                    <td>{{ $bookregisdata->parti3_name }}</td>
                    <td>{{ $bookregisdata->parti3_bg }}</td>
                    <td>{{ $bookregisdata->parti3_mobile }}</td>
                    <td>{{ $bookregisdata->parti3_gender }}</td>
                    <td>{{ $bookregisdata->parti3_age }}</td>
                    <td>{{ $bookregisdata->parti4_name }}</td>
                    <td>{{ $bookregisdata->parti4_bg }}</td>
                    <td>{{ $bookregisdata->parti4_mobile }}</td>
                    <td>{{ $bookregisdata->parti4_gender }}</td>
                    <td>{{ $bookregisdata->parti4_age }}</td>
                    <td>{{ $bookregisdata->parti5_name }}</td>
                    <td>{{ $bookregisdata->parti5_bg }}</td>
                    <td>{{ $bookregisdata->parti5_mobile }}</td>
                    <td>{{ $bookregisdata->parti5_gender }}</td>
                    <td>{{ $bookregisdata->parti5_age }}</td>
                    <td>{{ $bookregisdata->parti6_name }}</td>
                    <td>{{ $bookregisdata->parti6_bg }}</td>
                    <td>{{ $bookregisdata->parti6_mobile }}</td>
                    <td>{{ $bookregisdata->parti6_gender }}</td>
                    <td>{{ $bookregisdata->parti6_age }}</td>
                    <td>{{ $bookregisdata->created_at }}</td>
                    {{-- <td><a href="{{ url('deleterev/'.$reviews->id) }}" class='btn btn-danger btndel'>Delete</a></td> --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
