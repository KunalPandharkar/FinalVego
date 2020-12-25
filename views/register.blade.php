@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
    <!-- register form -->
    <section class="defaultcard">
        <div class="heading">
            <h5>Sign Up</h5>
            <hr class="headingunderline">
        </div>
        <form action="registercustomer" method="post">
            @csrf
            <div class="loginform">
                <div class="form-group fg-log">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="phone"
                        placeholder="Mobile Number" required>
                    <small class=" underinputerror">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="form-group fg-log">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="city"
                        placeholder="Your City" required>
                    <small class=" underinputerror">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="form-group fg-log">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>
                <div class="form-group fg-log">
                    <input type="password" class="form-control" id="confirm_passowrd" placeholder="Confirm Password"
                        name="password_confirmation" required>
                    <small class=" underinputerror">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="form-group fg-log1">
                    <button class="btn" type="submit">Register</button>
                    <small class="alreadyregwarning">
                       @if ($message = Session::get('alreadyregistered'))
                           {{$message}}
                       @endif
                    </small>
                </div>
                <a href="login.html" class="reg-link">Already Have an Account ? Click to Login</a>
                <div class="form-group fg-log fg-log2">
                    <img src="assets/images/google-symbol.svg" alt="">
                    <a href="" class="btn">Sign Up With Google</a>
                </div>
                <div class="form-group fg-log fg-log3">
                    <img src="assets/images/facebook-symbol.svg" alt="">
                    <a href="" class="btn">Sign Up with Facebook</a>
                </div>
            </div>
        </form>
    </section>
    <!-- registerform ends -->

@endsection
