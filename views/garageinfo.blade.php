@extends('layouts.mainlayout')
@section('title','VeGO-Aapka Apna Garage!')

@section('searchbar')
@endsection

@section('userlocation')
@endsection

@section('content')

<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/garage1.jpg" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage2.jpg" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage3.jpg" class="d-block w-100" alt="Third Slide">
            </div>
            <div class="carousel-item ">
                <img src="assets/images/garage4.jpg" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage1.jpg" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage2.jpg" class="d-block w-100" alt="Third Slide">
            </div>
            <div class="carousel-item ">
                <img src="assets/images/garage3.jpg" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage4.jpg" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage1.jpg" class="d-block w-100" alt="Third Slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/garage2.jpg" class="d-block w-100" alt="Third Slide">
            </div>
        </div>
    </div>


    <div class="scroll">
        <div class="horizontal-scroll">
            <div class="scroll-container infopageimgs">
                <img src="assets/images/garage1.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="0">
                <img src="assets/images/garage2.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="1">
                <img src="assets/images/garage3.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="2">
                <img src="assets/images/garage4.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="3">
                <img src="assets/images/garage1.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="4">
                <img src="assets/images/garage2.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="5">
                <img src="assets/images/garage3.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="6">
                <img src="assets/images/garage4.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="7">
                <img src="assets/images/garage1.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="8">
                <img src="assets/images/garage2.jpg" alt="" data-target="#carouselExampleFade" data-slide-to="9">
        </div>
        </div>
    </div>

</section>

<!-- garagehead card -->
<section class="stick-t">
    <div class="defaultcard">
        <div class="headtext">
            <h5>Arihant Honda Garage</h5>
        </div>
        <div class="headratings">
            <img src="assets/images/star.svg" alt="">
            <img src="assets/images/star.svg" alt="">
            <img src="assets/images/star.svg" alt="">
            <img src="assets/images/star.svg" alt="">
            <img src="assets/images/star.svg" alt="">
        </div>
        <div class="headstatus">
            <p>Open Now <span> - 9am - 8pm</span> <span id="hstype">( 3-Wheeler )</span></p>
        </div>
        <div class="headadress">
            <p>Kunal Niwas , New adarsh colony , Purna , Dist Parbhani </p>
        </div>
        <div class="pricebtn">
            <button class="btn" onclick="location.href='pricecard.html'">Price Card</button>
            <a href="" class="btn">
                <img src="assets/images/call.svg" alt="">
            </a>
            <a href="" class="btn wha">
                <img src="assets/images/whatsapp.svg" alt="">
            </a>
        </div>
    </div>
</section>
<!-- garagehead card end -->

<!-- garage services -->

<section>
    <div class="defaultcard">
        <div class="heading">
            <h5>Our Services</h5>
            <hr class="headingunderline">
        </div>
        <div class="grgservices">
            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice1.svg" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>AC Repair</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice2.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Avg. Check</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice3.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Break Suspension</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice4.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Diagnosis</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice5.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Engine Repair</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice6.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Full Servicing</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice7.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Vehicle Wash</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice8.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Tyre Replacement</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>

            <div class="grgservice">
                <div class="grgserviceimg">
                    <img src="assets/images/grgservice9.png" alt="">
                </div>
                <div class="grgservicetxt">
                    <div class="grgsername">
                        <p>Oil services</p>
                    </div>
                    <div class="grgserprice">
                        <p>₹ 500-700</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- garage services end -->

<!-- about garage -->
<section>
    <div class="defaultcard">

        <div class="heading">
            <h5>About Garage</h5>
            <hr class="headingunderline">
        </div>

        <div class="garageabt">
            <div class="cellabt clr">
                <div class="cell1">
                    <p>Owner</p>
                </div>
                <div class="cell2">
                    <p>Kunal Yadav Pandharkar</p>
                </div>
            </div>
            <div class="cellabt ">
                <div class="cell1">
                    <p>Garage Name</p>
                </div>
                <div class="cell2">
                    <p>Arihant Honda Garage</p>
                </div>
            </div>

            <div class="cellabt clr">
                <div class="cell1">
                    <p>Contact 1</p>
                </div>
                <div class="cell2 scmd scmd2">
                    <p>7774843561</p>
                    <img src="assets/images/edit2.svg" alt="">
                </div>
            </div>
            <div class="cellabt ">
                <div class="cell1">
                    <p>Contact 2</p>
                </div>
                <div class="cell2 scmd scmd2">
                    <p>9561601680</p>
                    <img src="assets/images/edit2.svg" alt="">
                </div>
            </div>
            <div class="cellabt clr">
                <div class="cell1 scmd">
                    <p>Whatsapp</p>
                    <img src="assets/images/whatsapp.svg" alt="">
                </div>
                <div class="cell2 scmd scmd2">
                    <p>7774843561</p>
                    <img src="assets/images/edit2.svg" alt="">
                </div>
            </div>

        </div>

</section>
<!-- about garage end -->


<!-- customer reviews -->
<section class="defaultcard revcont">
<div class="heading">
    <h5>From Our Customers</h5>
    <hr class="headingunderline">
</div>

<div id="carouselExampleFade2" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner reviewcard-c1">
        <div class="carousel-item reviewcard-c active">
            <div class="reviewcard">
                <div class="reviewname">
                    <p>Samruddhi Vaidya</p>
                </div>
                <div class="ratings1">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                </div>
                <div class="reviewdate">
                    <p>12th November</p>
                </div>
                <div class="reviewtxt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus veritatis,
                        eveniet est expedita repellendus eligendi officia quod voluptatum tempora!</p>
                </div>
            </div>
        </div>
        <div class="carousel-item reviewcard-c">
            <div class="reviewcard">
                <div class="reviewname">
                    <p>Kunal Pandharkar</p>
                </div>
                <div class="ratings1">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                </div>
                <div class="reviewdate">
                    <p>12th November</p>
                </div>
                <div class="reviewtxt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus veritatis,
                        eveniet est expedita repellendus eligendi officia quod voluptatum tempora!</p>
                </div>
            </div>
        </div>
        <div class="carousel-item reviewcard-c">
            <div class="reviewcard">
                <div class="reviewname">
                    <p>Samruddhi Vaidya</p>
                </div>
                <div class="ratings1">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                    <img src="assets/images/star.svg" alt="">
                </div>
                <div class="reviewdate">
                    <p>12th November</p>
                </div>
                <div class="reviewtxt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus veritatis,
                        eveniet est expedita repellendus eligendi officia quod voluptatum tempora!</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev nav-review1" href="#carouselExampleFade2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next nav-review2" href="#carouselExampleFade2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>
<!-- customer reviews ends -->

<!-- garage ratings -->
<section>
    <div class="defaultcard">

        <div class="heading">
            <h5>Customer Ratings</h5>
            <hr class="headingunderline">
        </div>


        <div class="rate-cust">
            <div class="tap-rate">
                <p>Tap to Rate Our Garage</p>
            </div>
            <div class="rating-grg">
                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                <p class="clear-r">
                    Clear
                </p>
            </div>
        </div>

        <div class="grgrating-cont">
            <div class="grgratings-c">
                <div class="grgr">
                    <div class="grg1">
                        <h3>5.0</h3>
                    </div>
                    <div class="grg2">
                        <img src="assets/images/star.svg" alt="">
                        <img src="assets/images/star.svg" alt="">
                        <img src="assets/images/star.svg" alt="">
                        <img src="assets/images/star.svg" alt="">
                        <img src="assets/images/star.svg" alt="">
                    </div>
                    <div class="grg3">
                        <p>Good</p>
                    </div>
                </div>
            </div>
            <div class="grgratings">
                <div class="grgrating-bars">
                    <div class="row-c">
                        <div class="rowc">
                            <div class="col-r">
                                <span>5</span>
                                <img src="assets/images/star-black.svg" alt="">
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                        </div>

                        <div class="rowc">
                            <div class="col-r">
                                <span>4</span>
                                <img src="assets/images/star-black.svg" alt="">
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                        </div>

                        <div class="rowc">
                            <div class="col-r">
                                <span>3</span>
                                <img src="assets/images/star-black.svg" alt="">
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="rowc">
                            <div class="col-r">
                                <span>2</span>
                                <img src="assets/images/star-black.svg" alt="">
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="rowc">
                            <div class="col-r">
                                <span>1</span>
                                <img src="assets/images/star-black.svg" alt="">
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- garage ratings end -->

@endsection


    
   
  
 
    