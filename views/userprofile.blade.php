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
            <h5>My Profile</h5>
            <hr class="headingunderline">
        </div>
        <div class="userprofile-in">
            <div class="usericon ui1">
                <img src="assets/images/user.svg" alt="">
            </div>
            <div class="username un1">
                <p>Hello, User </p>
                <p>-</p>
            </div>

        </div>
        <form action="updatecustomer" method="post">
            @csrf



            <div class="usereditform">
                <div class="form-group fg-log">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"

                    {{-- value="{{ $usersdata->first_name }}" --}}
                    @if (session()->has('user'))
                    value="{{ $usersdata->first_name }}"
                    @endif
                    >
                </div>
                <div class="form-group fg-log">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                    @if (session()->has('user'))
                    value="{{ $usersdata->last_name }}"
                    @endif
                    >
                </div>
                <div class="form-group fg-log">
                    <label for="exampleInputEmail1">Your City</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                    @if (session()->has('user'))
                    value="{{ $usersdata->cust_city }}"
                    @endif
                    >
                </div>
                <div class="form-group fg-log">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                    @if (session()->has('user'))
                    value="{{ $usersdata->contact1 }}"
                    @endif
                    >
                </div>
                <div class="form-group fg-log">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                    @if (session()->has('user'))
                    value="{{ $usersdata->cust_password }}"
                    @endif
                    >
                </div>
                <div class="form-group fg-log us-gender">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="form-group fg-log fg-space">
                    <label for="exampleInputEmail1">Email ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                    @if (session()->has('user'))
                    value="{{ $usersdata->cust_mail }}"
                    @endif
                    >

                </div>
            </div>
        </form>
        <div class="fg-us">
            <a href="" class="btn rst">Reset</a>
            <a href="" class="btn">Update</a>
        </div>
    </section>
    <!-- loginform ends -->

@endsection
