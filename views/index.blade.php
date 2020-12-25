@extends('layouts.mainlayout')
@section('title','VeGO-Aapka Apna Garage!')
@section('content')

@if ($message = Session::get('sucessregistered'))
<div class="alert alert-success loginsucess alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

</div>
@endif
    <section class="desktopservices">
        <!-- Carousel vego -->
        <section class="indexcarousel">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/garage1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/garage3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/garage2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- carousel vego ends -->

        <!-- Vego offers -->
        <section class="vegooffers">
            <div class="scroll offer-sc">
                <div class="horizontal-scroll">
                    <div class="scroll-container offers">
                        <img src="assets/images/offer1.jpg" alt="">
                        <img src="assets/images/offer2.jpg" alt="">
                        <img src="assets/images/offer1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- vego offers -->



        <!-- Services Vego -->

        <section class="vegoservices mx-auto">
            <div class="services">

                <div class="services-ind">
                    <div class="service" id="ser1">
                        <a href="emergencyservice.html">
                            <div class="serviceicon es-ind">
                                <img src="assets/images/emergencyicon.svg" alt="">
                            </div>
                            <div class="servicename">
                                <p>Emergency</p>
                            </div>
                        </a>

                    </div>


                    <div class="service" id="ser3">
                        <a href="garages.html">
                            <div class="serviceicon">
                                <img src="assets/images/garageicon.svg" alt="">
                            </div>
                            <div class="servicename">
                                <p>Garages</p>
                            </div>
                        </a>
                    </div>

                    <div class="service" id="ser2">
                        <a href="servicecenters.html">
                            <div class="serviceicon">
                                <img src="assets/images/service-center.png" alt="">
                            </div>
                            <div class="servicename">
                                <p>Service Centers</p>
                            </div>
                        </a>

                    </div>
                </div>

            </div>

        </section>
        <!-- Services end -->

    </section>

    <!-- get in touch desktop -->
    <section>
        <div class="getintouchds">
            <div class="getinhd">
                <h5>Want To Grow Your Business ?</h5>
                <p>We are right here. Register Your Garage & Showrooms and Become a Service Provider.</p>

            </div>
            <div class="getinbt">
                <a href="workwithus.html"> <button class="btn">Click Here </button></a>
            </div>

        </div>
    </section>
    <!-- get in touch desktop end -->

    <!-- top Garages Cards -->
    <section>
        <div class="topshowrooms">
            <div class="heading">
                <h5>Top Garages</h5>
                <hr class="headingunderline">
            </div>

            <div class="scroll">
                <div class="horizontal-scroll">
                    <div class="scroll-container showrommscroll">
                        <a href="garageinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage1.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Garage</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="garageinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage2.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Garage</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="garageinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage3.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Garage</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="garageinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage4.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Garage</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="garageinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage1.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Garage</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end Top garages card -->

    <!-- Top Service center cards -->
    <section>
        <div class="topshowrooms">
            <div class="heading">
                <h5>Top Service Centers</h5>
                <hr class="headingunderline">
            </div>

            <div class="scroll">
                <div class="horizontal-scroll">
                    <div class="scroll-container showrommscroll">
                        <a href="servicecenterinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage1.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Service Center</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="servicecenterinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage2.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Service Center</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="servicecenterinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage3.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Service Center</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="servicecenterinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage4.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Service Center</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                        <a href="servicecenterinfo.html">
                            <div class="showroomcard">
                                <img src="assets/images/garage1.jpg" alt="">
                                <div class="showroomname">
                                    <p>Arihant Honda Service Center</p>
                                </div>
                                <div class="showroomtype">
                                    <div class="type">
                                        <p>2-Wheeler</p>
                                    </div>
                                    <div class="ratings">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                        <img src="assets/images/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="address">
                                    <p>Kunal Niwas , Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end Top Service center cards -->

    <!-- search service centers -->
    <section>
        <div class="topshowrooms">
            <div class="heading">
                <h5>Find The Right Service Center</h5>
                <hr class="headingunderline">
            </div>

            <div class="search-sc">
                <form>
                    <div class="form-group fg-sc">
                        <label for="formGroupExampleInput">Brand Name:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Maruti">
                    </div>
                    <div class="form-group fg-sc">
                        <label for="formGroupExampleInput2">Type Of Service Center:</label>
                        <select class="custom-select">
                            <option selected>2 Wheeler</option>
                            <option value="1">3 Wheeler</option>
                            <option value="2">4 Wheeler</option>
                            <option value="3">4+ Wheeler</option>
                        </select>
                    </div>
                    <button class="btn">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- search service centers end-->

    <section class="desktopbtmcards">
        <a href="emergencyinfo.html">
            <div class="vehrepaired-em-cont">
                <div class="vehrepaired-em">
                    <div class="vehrepaired-txt">
                        <div class="vehrtxt1">
                            <p>Get Your Vehicle Repaired Anywhere & Anytime !</p>
                        </div>
                        <div class="vehrtxt2">
                            <p>We care about you and want to make your ride with no worries.</p>
                        </div>
                    </div>
                    <div class="vehrepaired-img">
                        <img src="assets/images/veh-repair.svg" alt="">
                    </div>
                </div>
                <div class="vehrepaired-explore">
                    <p>Click Here</p>
                    <img src="assets/images/right-arrow.svg" alt="">
                </div>
            </div>
        </a>



        <a href="workwithus.html">
            <div class="vehrepaired-em-cont">
                <div class="vehrepaired-em">
                    <div class="vehrepaired-txt">
                        <div class="vehrtxt1">
                            <p>Register Your Garages & Service Centers With Us</p>
                        </div>
                        <div class="vehrtxt2">
                            <p>Register with us and we will bring you the new customers.</p>
                        </div>
                    </div>
                    <div class="vehrepaired-img">
                        <img src="assets/images/reg-business.svg" alt="">
                    </div>
                </div>
                <div class="vehrepaired-explore">
                    <p>Click Here</p>
                    <img src="assets/images/right-arrow.svg" alt="">
                </div>
            </div>
        </a>
    </section>

@endsection
