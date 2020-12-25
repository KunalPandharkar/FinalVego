@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
      <!-- vector -->
      <section>
        <div class="garagevector ">
            <img src="assets/images/vector-emergency.png" alt="">
        </div>
        <div class="defaultcard">
            <div class="heading">
                <h5>VeGO's Emergency Service In Just 4 Steps</h5>
                <hr class="headingunderline">
            </div>
            <div class="emer-images">
                <div class="emerstep">
                    <div class="emersteptxt">
                        <p>1. Click On Emergency Service</p>
                    </div>
                    <div class="emerstepicon">
                        <img src="assets/images/ss1.png" alt="">
                    </div>
                </div>

                <div class="emerstep">
                    <div class="emersteptxt">
                        <p>2. Select Type Of Your Vehicle</p>
                    </div>
                    <div class="emerstepicon">
                        <img src="assets/images/ss2.png" alt="">
                    </div>
                </div>

                <div class="emerstep">
                    <div class="emersteptxt">
                        <p>3. Enter Your Location</p>
                    </div>
                    <div class="emerstepicon">
                        <img src="assets/images/ss3.png" alt="">
                    </div>
                </div>

                <div class="emerstep">
                    <div class="emersteptxt">
                        <p>4. Choose the Garage</p>
                    </div>
                    <div class="emerstepicon">
                        <img src="assets/images/ss4.png" alt="">
                    </div>
                </div>


            </div>
            <div class="emergencyservicego">
                <a href="emergencyservice.html" class="btn">Click For Emergency Service</a>
            </div>
        </div>

    </section>
    <!-- vector ends -->
@endsection
  

   