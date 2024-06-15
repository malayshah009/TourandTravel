<link rel="stylesheet" href="http://127.0.0.1:8000/css/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="login-bg">
    <div class="regis-nav">
        <div class="regis-navimg">
            <a href="/">
                <img src="{{ '/img/hmlogow.png' }}" alt="Logo" width="100%" height="50px">
            </a>
        </div>
        <div class="regis-nava">
            <a href="/regis">Sign Up</a>
            <a href="/login" >Login</a>
        </div>
    </div>
    <div class="login-mid">
        <div class="login-mid1"></div>
        <div class="chpass-mid2">
            <h1 style="text-align:center;">Change Password</h1>
            <form action="#" method="POST">
            @csrf
                <input type="Password" placeholder="Enter Old Password" name="oldpass"><br>
                <input type="password" placeholder="Enter New Password" name="newpass"><br>
                <input type="password" placeholder="Enter Confirm Password" name="confpass"><br>
                <hr style="margin: 5px;">
                <div class="d-flex">
                    <button class="btn btn-outline-primary">Update</button>
                    <a href="{{ '/login' }}" class="btn btn-outline-secondary">Cancle</a>
                </div>
            </form>
        </div>
    </div>
</div>
