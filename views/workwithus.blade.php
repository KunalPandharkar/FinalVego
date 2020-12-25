@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')

@section('content')
<section class="work">
    <!-- <div class="heading">
        <h5>Work With Us</h5>
        <hr class="headingunderline">
    </div> -->
    <a href="registergarage.html">
        <div class="work-cont">
            <div class="worklist">
                <div class="workicon">
                    <img src="assets/images/garageicon.svg" alt="">
                </div>
                <div class="worktxt">
                    <div class="worktxt1">
                        <p>Register Garage</p>
                    </div>
                    <div class="worktxt2">
                        <p>For the emergency repair service Customer will find you. </p>
                    </div>
                </div>
            </div>
            <div class="work-explore">
                <p>Register</p>
                <img src="assets/images/right-arrow1.svg" alt="">
            </div>
           
        </div>
        
    </a>
    <a href="registerservicecenter.html">
        <div class="work-cont">
            <div class="worklist">
                <div class="workicon">
                    <img src="assets/images/service-center.png" alt="">
                </div>
                <div class="worktxt">
                    <div class="worktxt1">
                        <p>Register Service Center</p>
                    </div>
                    <div class="worktxt2">
                        <p>Customer will find you to repair vehicle and other services.</p>
                    </div>
                </div>
            </div>
            <div class="work-explore">
                <p>Register</p>
                <img src="assets/images/right-arrow1.svg" alt="">
            </div>
        </div>
        
    </a>
  
</section>

@endsection
   
   