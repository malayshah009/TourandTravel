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
        <div class="login-mid2">
            <h1 style="text-align:center;">Login to Your Account</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger">
                <p>{{ session()->get('error') }}</p>
            </div>
        @endif
            <form action="{{ 'loginUser' }}" method="POST">
            @csrf
                {{-- <label for="" style="font-family: sans-serif; margin-left:5px;">Name :</label><br> --}}
                <input type="text" placeholder="Enter User Name" name="uname"><br>
                {{-- <label for="" style="font-family: sans-serif; margin-left:5px;">Password :</label><br> --}}
                <input type="password" placeholder="Enter Your Password" name="password"><br>
                <button class="btn btn-outline-primary">Submit</button>
            </form>
            <p>Doesn't have an account? <a href="/regis">Sign Up</a></p>
            <hr>
            <span class="button2"><img src="{{ '/img/glogo.png' }}" width="10%" height="30px"><a href="">Login with Google</a></span>
            <a class="chpassa" href="/changepassword">Forgot Your Password?</a>
        </div>
    </div>
</div>
