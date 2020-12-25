@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')

    <!-- login form -->
    <section class="defaultcard">
        <div class="heading">
            <h5>Sign In</h5>
            <hr class="headingunderline">
        </div>

        @if ($message = Session::get('logoutsuccess'))
            <div class="alert alert-success loginsucess alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif

        @if ($message = Session::get('failedlogin'))
            <div class="alert alert-danger loginsucess alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif

        <form action="logincustomer" method="post">
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
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password"
                        placeholder="Password" required>
                </div>
                <div class="form-group fg-log1">
                    <button type="submit" class="btn">Login</button>
                </div>
                <a href="register.html" class="reg-link">Don't Have an Account ? Click to Register</a>
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
    <!-- loginform ends -->

@endsection
