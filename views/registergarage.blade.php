@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
<section class="">
    <div class="garagevector ">
        <img src="assets/images/vector-garage.png" alt="">
    </div>
    <div class="defaultcard topgarage serv-c">
        <div class="garagetxthead">
            <h5>Register Your Garage With Us.</h5>
            <p>Bring Your Garage Online and Get More Customers To You !</p>
            <p id="garagetxthead1">Earn Upto <span id="garagetxthead2">₹ 2 Lakhs</span> Per Year</p>
        </div>
        
           
        
    </div>

</section>

<section>
    <div class="defaultcard serv-c">
        <div class="heading">
            <h5>Your Benefits</h5>
            <hr class="headingunderline">
        </div>
        <div class="ourservices">
            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/grg-online.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Garage Will Be On Internet</p>
                </div>
            </div>

            <!-- <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/prd-on-service.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Provide Online Service</p>
                </div>
            </div> -->

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/get-n-cust.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Get All Nearby Customers</p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/cust-feedback.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Get Customers Feedback</p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/fast-ser.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Faster Service</p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/24.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>24 X 7 Available</p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/get-m-cust.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Get More Customers</p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/service-p.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>More Profit Margin !</p>
                </div>
            </div>

            <!-- <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/get-1yr-free.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Get 1 Year Free Service</p>
                </div>
            </div> -->

            <!-- <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/yearly-m.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>Yearly Maintenance</p>
                </div>
            </div> -->

        </div>
    </div>
</section>

<!-- timeline -->
<section>
<div class="defaultcard serv-c vegow">
    <div class="heading">
        <h5>How VeGO Works ?</h5>
        <hr class="headingunderline">
    </div>

    <div class="timeline">
        <div class="vectorcol">
            <img src="assets/images/step1.svg" alt="">
        </div>
        <div class="verticalline">
            <div class="number">
                1
            </div>
        </div>
        <div class="textcol">
            <p>Whenever Customer's vehicle is broken down.</p>
        </div>
    </div>

    <div class="timeline">
        <div class="vectorcol">
            <img src="assets/images/step2.svg" alt="">
        </div>
        <div class="verticalline">
            <div class="number">
                2
            </div>
        </div>
        <div class="textcol">
            <p>Customer searches for nearby Garage with the help of VeGO.</p>
        </div>
    </div>

    <div class="timeline">
        <div class="vectorcol">
            <img src="assets/images/step3.svg" alt="">
        </div>
        <div class="verticalline">
            <div class="number">
                3
            </div>
        </div>
        <div class="textcol">
            <p>This is how Customer find your Garage and number of Customers get increased !</p>
        </div>
    </div>
</div>

</section>
<!-- timeline end -->

<section>
    <div class="defaultcard serv-c fg-space">
        <div class="heading">
            <h5>Work With Us</h5>
            <hr class="headingunderline">
        </div>
        <div class="ourservices">


            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/get-1yr-free.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p> <b> Get 1 Year Free Service</b> </p>
                </div>
            </div>

            <div class="pro-service">
                <div class="proserviceimg">
                    <img src="assets/images/yearly-m.png" alt="">
                </div>
                <div class="proservicetxt">
                    <p>After 1 Year Pay : ₹999 Per Year. </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- register button -->
<section>
    <div class="defaultcard serv-c">
        
        <div class="regbtn-cont">
            <a href="" class="btn regbtn">Enquire</a>
            <a href="registergarageform.html" class="btn enbtn">Register</a>
        </div>

    </div>
</section>
<!-- register button end -->

@endsection

   