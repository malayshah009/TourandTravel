<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Details</title>
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
    <h1 class="container-fluid text-center my-3">Feedback Details</h1>
    <div>
        <table id="mytable5" class="table">
            <thead class="table-primary">
                <tr style="Background :blue;">
                    <th>Sr No.</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($feedbacks as $feedbacks)
            <tr>
                    <td>{{ $feedbacks->id }}</td>
                    <td>{{ $feedbacks->name }}</td>
                    <td>{{ $feedbacks->email }}</td>
                    <td>{{ $feedbacks->comment }}</td>
                    <td>{{ $feedbacks->created_at }}</td>
                    <td><a href="{{ url('deletefeed/'.$feedbacks->id) }}" class='btn btn-danger btndel'>Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
