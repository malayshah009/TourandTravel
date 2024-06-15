<link rel="stylesheet" href="http://127.0.0.1:8000/css/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="regis-bg">
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
    <div class="regis-mid">
        <div class="reg-mid2">
            <h1>Create a New Account</h1>
            <hr>
            <form action="{{ 'registerUser' }}" method="POST">
                @csrf
                {{-- <label for="">Full Name </label><br> --}}
                {{-- <input type="text" placeholder="Enter Your Full Name"><br> --}}
                <input type="text" name="fname" placeholder="Enter Your Full Name" class="form-control @error('fname') is-invalid @enderror" value="{{ old("fname") }}">
                @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="text" name="pno" placeholder="Enter Your Mobile Number" class="form-control @error('pno') is-invalid @enderror" value="{{ old("pno") }}">
                @error('pno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" name="email" placeholder="Enter Your Gmail" class="form-control @error('email') is-invalid @enderror" value="{{ old("email") }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="">Gender :</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female" > Female<br>
                <label for="">State :</label>
                <select class="form-control" id="inputState" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ old("state") }}">
                    <option value="">Select State</option>
                    <option value="Andra Pradesh">Andra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadeep">Lakshadeep</option>
                    <option value="Pondicherry">Pondicherry</option>
                </select>
                @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" placeholder="Enter User Name" name="uname" class="form-control @error('uname') is-invalid @enderror" value="{{ old("uname") }}">
                @error('uname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror" >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Repeat Your Password" name="re_password" class="form-control @error('re_password') is-invalid @enderror">
                @error('re_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
            <p>Already have an account? <a href="/login">Login here</a></p>
            <hr>
            <span class="button2"><img src="{{ '/img/glogo.png' }}" width="9%" height="30px"><a href="">Sign up with Google</a></span>
        </div>
    </div>
</div>
