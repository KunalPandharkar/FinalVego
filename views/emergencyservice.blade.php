@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
     <!-- sidebar Sort -->
     <section id="sidebar">
        <div class="vego-sidebar vego-bar-block vego-animate-bottom " style="display:none;z-index:5;width:100%;"
            id="sortsidebar">

            <div class="sortby">
                <div class="sorthead">
                    <p>SORT BY</p>
                    <hr>
                </div>

                <form action="">
                    <div class="form-group form-check">
                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <span class="geekmark"></span>
                            <label class="form-check-label" for="exampleCheck1">Sort By Distance</label>
                        </div>
                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <span class="geekmark"></span>
                            <label class="form-check-label" for="exampleCheck2">Sort By Ratings</label>

                        </div>
                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                            <span class="geekmark"></span>
                            <label class="form-check-label" for="exampleCheck3">Delievery Price - Low to High</label>

                        </div>
                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck4">
                            <span class="geekmark"></span>
                            <label class="form-check-label" for="exampleCheck4">Delievery Price - High to Low</label>

                        </div>
                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck5">
                            <span class="geekmark"></span>
                            <label class="form-check-label" for="exampleCheck5">Sort By Time to Reach</label>

                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- sidebar Sort end -->

    <!-- sidebar Filter -->
    <section id="sidebar">
        <div class="vego-sidebar vego-bar-block vego-animate-bottom " style="display:none;z-index:5;width:100%;"
            id="filtersidebar">

            <div class="sortby">
                <div class="sorthead">
                    <p>Filters</p>
                    <hr>
                </div>

                <form action="">
                    <div class="form-group form-check">

                        <div class="filteroptions">
                            <div class="sortlist" id="leftoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck7">

                                <label class="form-check-label" for="exampleCheck7">Only 2-Wheelers</label>
                            </div>
                            <div class="sortlist" id="rightoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck8">

                                <label class="form-check-label" for="exampleCheck8">Only 3-Wheelers</label>
                            </div>
                        </div>
                        <div class="filteroptions">
                            <div class="sortlist" id="leftoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck9">

                                <label class="form-check-label" for="exampleCheck9">Only 4-Wheelers</label>

                            </div>
                            <div class="sortlist " id="rightoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck10">

                                <label class="form-check-label" for="exampleCheck10">Others</label>

                            </div>
                        </div>
                        <div class="filteroptions">

                            <div class="sortlist" id="leftoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck12">

                                <label class="form-check-label" for="exampleCheck12">Local Service Centers</label>
                            </div>
                            <div class="sortlist " id="rightoption">
                                <input type="checkbox" class="form-check-input" id="exampleCheck13">

                                <label class="form-check-label" for="exampleCheck13">Workshops</label>
                            </div>
                        </div>


                        <div class="sortlist">
                            <input type="checkbox" class="form-check-input" id="exampleCheck11">

                            <label class="form-check-label" for="exampleCheck11">Authorized Service Centers</label>

                        </div>

                    </div>
                    <div class="apply">
                        <button class="btn">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- sidebar Filter end -->

    <!-- top Garages Cards -->
    <section>
        <div class="topshowrooms">
            <div class="heading emerg" id="hd">
                <h5>Emergency Service</h5>
                <hr class="headingunderline emerg">
            </div>


            <form id="regForm" action="/action_page.php">
                <!-- Circles which indicates the steps of the form: -->
                <div class="steps">
                    <span class="step">1</span>
                    <span class="step">2</span>
                    <span class="step">3</span>

                </div>
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <div class="">
                        <div class="typevehicle">

                            <div class="wheeler" id="option">
                                <a>
                                    <img src="assets/images/type1.svg" alt="">
                                    <div class="emgtxt">
                                        <p>2 WHEELER</p>
                                    </div>
                                </a>
                            </div>


                            <div class="wheeler" id="option">
                                <a>
                                    <img src="assets/images/type2.svg" alt="">
                                    <div class="emgtxt">
                                        <p>3 WHEELER</p>
                                    </div>
                                </a>
                            </div>


                        </div>
                        <div class="typevehicle">
                            <div class="wheeler" id="option">
                                <a>
                                    <img src="assets/images/type3.svg" alt="">
                                    <div class="emgtxt">
                                        <p>4 WHEELER</p>
                                    </div>
                                </a>
                            </div>
                            <div class="wheeler" id="option">
                                <a>
                                    <img src="assets/images/type4.svg" alt="">
                                    <div class="emgtxt">
                                        <p>OTHER</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab locemg">
                    <form class="form p-2 searchbar-cont " id="searchbox">
                        <input class="form-control  searchbar" type="search" placeholder="Enter Your Location"
                            aria-label="Search">
                        <img src="assets/images/location.svg" alt="" class="searchicon">
                    </form>
                    <div class="detect text-center locbtn">
                        <a href="" class="btn dtbtn">
                            Detect My Current Location
                        </a>
                    </div>
                    <div class="googlemap ">
                        <iframe id="googlemap"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15073.234307308167!2d77.02138377450119!3d19.181720042435785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f853c6a83fbf800!2sPurna%20Junction!5e0!3m2!1sen!2sin!4v1597152317620!5m2!1sen!2sin"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
                <div class="tab">
                    <form class="form p-2 searchbar-cont stick-t bgc-s" id="">
                        <input class="form-control  searchbar" type="search"
                            placeholder="Search Garage or Service Center" aria-label="Search">
                        <img src="assets/images/searchicon.svg" alt="" class="searchicon">
                    </form>
                    <!-- filter -->
                    <div class="filtercard sticky1" id="filtersection">
                        <div class="sort" onclick="sortsidebar_open()">
                            <div class="sorticon">
                                <img src="assets/images/sort.svg" alt="">
                            </div>
                            <div class="sorttxt">
                                <p>Sort</p>
                            </div>
                        </div>
                        <div class="filter" onclick="filtersidebar_open()">
                            <div class="sorticon">
                                <img src="assets/images/filter.svg" alt="">
                            </div>
                            <div class="sorttxt">
                                <p>Filter</p>
                            </div>
                        </div>
                    </div>
                    <!-- end filter -->


                    <!-- garage cards  -->
                    <section class="garagescards">

                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="garage defaultcard" id="servicenter">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus" id="thirdrow">
                                        <p>Service Center</p>
                                    </div>
                                    <div class="garagedistance" id="thirdrow">
                                        <p>Local</p>
                                    </div>
                                    <div class="garagetype" id="thirdrow">
                                        <p>Honda</p>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="garage defaultcard" id="servicenter">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus" id="thirdrow">
                                        <p>Service Center</p>
                                    </div>
                                    <div class="garagedistance" id="thirdrow">
                                        <p>Local</p>
                                    </div>
                                    <div class="garagetype" id="thirdrow">
                                        <p>Honda</p>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="garage defaultcard">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="garage defaultcard" id="servicenter">
                            <a href="garageinfo.html">
                                <div class="firstrow">
                                    <div class="garageimg">
                                        <img src="assets/images/black.png" alt="">
                                    </div>
                                    <div class="garageinfo">
                                        <div class="garagename">
                                            <p>Arihant Honda Garage</p>
                                        </div>
                                        <div class="garageratings">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                            <img src="assets/images/star.svg" alt="">
                                        </div>
                                        <div class="garageaddress">

                                            <p>
                                                <img src="assets/images/cursor.svg" alt="">
                                                Kunal Niwas , New Adarsh Colony , Purna , Dist Parbhani 431512</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus" id="thirdrow">
                                        <p>Service Center</p>
                                    </div>
                                    <div class="garagedistance" id="thirdrow">
                                        <p>Local</p>
                                    </div>
                                    <div class="garagetype" id="thirdrow">
                                        <p>Honda</p>
                                    </div>
                                </div>
                                <div class="secondrow">
                                    <div class="garagestatus">
                                        <p>Open Now</p>
                                    </div>
                                    <div class="garagedistance">
                                        <p>2.5 KM</p>
                                    </div>
                                    <div class="garagetype">
                                        <p>2-Wheeler</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <!-- garage cards end -->
                </div>
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" class="btn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        <a href="preloader.html"><button type="button" class="btn" id="sbtBtn">Submit</button></a>
                    </div>
                </div>

            </form>


        </div>
    </section>
    <!-- end Top garages card -->
@endsection

   
  