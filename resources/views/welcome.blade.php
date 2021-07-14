<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('register/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('register/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/css/register/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('register/css/register/main.css')}}">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/8b03973819.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="/user" method="post">
                @csrf
                <span class="login100-form-title p-b-49">
					User Form
					</span>

                <div class="wrap-input100 m-b-23">
                    <span class="label-input100">Identity Number</span>
                    <input class="input100" type="text" name="id-numb" placeholder="Type your id number">
                    @error('id-numb')
                    <div class="text-danger" style="font-size: 14px">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="wrap-input100  m-b-23">
                    <span class="label-input100">First Name</span>
                    <input class="input100" type="text" name="fName" placeholder="Type your first name">
                    @error('fName')
                    <div class="text-danger" style="font-size: 14px">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="wrap-input100  m-b-23">
                    <span class="label-input100">Last Name</span>
                    <input class="input100" type="text" name="lName" placeholder="Type your last name">
                    @error('lName')
                    <div class="text-danger" style="font-size: 14px">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="wrap-input100  m-b-23">
                    <span class="label-input100">Phone</span>
                    <input class="input100" type="text" name="phone" placeholder="Type your phone">
                    @error('phone')
                    <div class="text-danger" style="font-size: 14px">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="wrap-input100 m-b-23" style="border-bottom: none">
                    <span class="label-input100">Gender</span>
                    <input class="input-mini" type="radio" name="id_card" value="1">Male
                    <input class="input-mini" type="radio" name="id_card" value="2">Female
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <div class="col-6"><input class="btn btn-sm btn-primary" type="submit" value="Save"></div>
                        <div class="col-6"><input class="btn btn-sm btn-block" type="reset" value="Reset"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('register/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('register/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('register/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/js/register/main.js')}}"></script>

</body>
</html>
