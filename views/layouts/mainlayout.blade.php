<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="description" content="Online Vehicle Repair Service">
    <meta name="keywords"
        content="car,garage,showroom,shop,bike,tcs,honda,audi,mechanic,repair,carcompare,carbuy,carshop">
    <meta name="author" content="Kunal Pandharkar">
    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="https://google.com" />
    <link rel="shortcut icon" href="assets/images/appshortcut.png" type="/x-icon" />
    <!-- TRAILS -->
    <meta property="og:image" content="assets/images/appshortcut.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <title>
        @yield('title')
    </title>
</head>

<body>
    <link itemprop="thumbnailUrl" href="assets/images/appshortcut.png">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="assets/images/appshortcut.png">
    </span>

    @section('mainsidebar')

        <!-- sidebar -->
        <section id="sidebar ">
            <div class="vego-sidebar vego-bar-block vego-animate-left " style="display:none;z-index:5;width:70%;"
                id="mySidebar">

                <div class="userprofile">
                    <div class="cutsidebar" onclick="sidebar_close()">
                        <img src="assets/images/crosssidebar.svg" alt="">
                    </div>

                    <a href="userprofile.html">
                        <div class="usericon">
                            <img src="assets/images/user.svg" alt="">
                        </div>
                        <div class="username">
                            <p>Kunal Pandharkar</p>
                            <img src="assets/images/edit.svg" alt="">
                        </div>
                    </a>

                    <div class="usernumber">
                        <p>+91 7774843561</p>
                    </div>
                </div>
                <a href="index.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/home.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Home</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>

                <a href="emergencyservice.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/emergencyicon.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Emergency Service</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>

                <a href="garages.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/garageicon.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Nearby Garages</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>

                <a href="servicecenters.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/service-center.png" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Nearby Service Centers</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>

                <a href="workwithus.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/handshake.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Work with Us</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>
                <a href="aboutus.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/aboutus.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>About Us</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>
                <a href="contactus.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/contactus.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Contact Us</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>
                @if (session()->has('user'))
                <a href="logoutuser">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/loginsignup.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Logout</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>
                @else
                <a href="login.html">
                    <div class="sidebarlink">
                        <div class="sblinkicon">
                            <img src="assets/images/loginsignup.svg" alt="">
                        </div>
                        <div class="sblinktxt">
                            <p>Login / SignUp</p>
                        </div>
                        <div class="sblinknav">
                            <img src="assets/images/navarrow.svg" alt="">
                        </div>
                    </div>
                </a>
                @endif

            </div>
        </section>
        <!-- sidebar end -->

    @show


    @section('locationsidebar')

        <!-- sidebar location -->
        <section id="sidebar">
            <div class="vego-sidebar vego-bar-block vego-animate-bottom " style="display:none;z-index:5;width:100%;"
                id="addLocationSidebar">

                <div class="LocationUser">
                    <div class="loctxt">
                        <p id="headloc">Choose Your Location</p>
                        <p id="loc2">Select a location to see exact results</p>
                    </div>
                    <div class="addcity">
                        <form class="form p-2 searchbar-cont">
                            <input class="form-control  searchbar" type="search" placeholder="Enter Pincode or City"
                                aria-label="Search">
                            <img src="assets/images/location.svg" alt="" class="searchicon">
                        </form>
                    </div>
                    <div class="detect text-center">
                        <a href="" class="btn dtbtn">
                            Detect My Current Location
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar location end -->

    @show


    @section('navbar')
        <header>
            <nav class="navbar navbar-expand-lg ">
                <img class="navbar-toggler togglerimg" src="assets/images/sidebartoggler.svg" alt=""
                    onclick="sidebar_open()">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="">
                </a>

                <div class="collapse navbar-collapse navLinks" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class=" dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="emergencyservice.html">Emergency Service</a>

                                    <a class="dropdown-item" href="garages.html">Nearby Garages</a>
                                    <a class="dropdown-item" href="servicecenters.html">Nearby Service Centers</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.html" tabindex="-1" aria-disabled="true">Login/Signup</a>
                        </li>
                        <li class="nav-item">
                            <div class=" dropdown">
                                <a class="nav-link dropdown-toggle" href="workwithus.html" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Work With us
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="registergarage.html">Register Garage</a>
                                    <a class="dropdown-item" href="registershowroom.html">Register Showroom</a>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contactus.html" tabindex="-1" aria-disabled="true">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="aboutus.html" tabindex="-1" aria-disabled="true">About us</a>
                        </li>

                    </ul>

                </div>
                <div class="addlocationdesk">

                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Add Location" aria-label="Search"
                            Value="Aurangabad-431001" data-toggle="modal" data-target="#LocationModal">
                    </form>
                </div>
            </nav>


        </header>
    @show


    @section('searchbar')
        <form class="form p-2 searchbar-cont sticky" id="searchbox">
            <input class="form-control  searchbar" type="search" placeholder="Search For Garage and Service Centers"
                aria-label="Search">
            <img src="assets/images/searchicon.svg" alt="" class="searchicon">
        </form>
    @show



    <!-- add location modal desktop -->
    <div class="modal fade" id="LocationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="LocationUser">
                        <div class="loctxt">
                            <p id="headloc">Choose Your Location</p>
                            <p id="loc2">Select a location to see exact results</p>
                        </div>
                        <div class="addcity">
                            <form class="form p-2">
                                <input class="form-control detectlocationbox" type="search"
                                    placeholder="Enter Pincode or City" aria-label="Search">
                                <img src="assets/images/location.svg" alt="" class="locationicon">
                            </form>
                        </div>
                        <div class="detect text-center">
                            <a href="" class="btn dtbtn">
                                Detect My Current Location
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- add location modal desktop end-->


    @section('userlocation')
        <!-- user location -->
        <div class="locationcard" onclick="addLocationsidebar_open()">
            <div class="locationimg">
                <img src="assets/images/location.svg" alt="">
            </div>
            <div class="locationtxt">
                <p>Samruddhi , Aurangabad - 431009</p>
                <div class="downarrow">
                    <img src="assets/images/downarrow.svg" alt="">
                </div>

            </div>
        </div>

        <!-- user location end -->
    @show


    @yield('content')
    <div class="vego-overlay" onclick="sidebar_close()" style="cursor:pointer" id="myOverlay"></div>
    <div class="vego-overlay" onclick="addLocationsidebar_close()" style="cursor:pointer" id="myOverlay2"></div>
    <div class="vego-overlay" onclick="sortsidebar_close()" style="cursor:pointer" id="myOverlay3"></div>
    <div class="vego-overlay" onclick="filtersidebar_close()" style="cursor:pointer" id="myOverlay4"></div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wh-logo">
                    <img src="assets/images/logo.png" alt="">
                    <p>TO Make Your Drive Best !</p>
                </div>

                <div class="col-md-3">
                    <h6>Our Services</h6>
                    <ul class="footer-links">
                        <li><a href="emergencyservice.html">Emergency Service</a></li>
                        <li><a href="ondoorservice.html">Nearby Garages</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h6>Our Partners</h6>
                    <ul class="footer-links">
                        <li><a href="workwithus.html">Garages</a></li>
                        <li><a href="workwithus.html">Service Centers</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h6>Contact Us</h6>
                    <ul class="footer-links">
                        <div class="cu-detail-item">
                            <div class="cu-det-icon cu-det-icon-h">
                                <img src="assets/images/call1.svg" alt="">
                            </div>
                            <div class="cu-det-txt">
                                <p> +91 9284320322</p>
                            </div>
                        </div>

                        <div class="cu-detail-item">
                            <div class="cu-det-icon cu-det-icon-h">
                                <img src="assets/images/email.svg" alt="">
                            </div>
                            <div class="cu-det-txt">
                                <p> samruddhivaidya@gmail.com</p>
                            </div>
                        </div>

                        <div class="cu-detail-item">
                            <div class="cu-det-icon cu-det-icon-h">
                                <img src="assets/images/pin.svg" alt="">
                            </div>
                            <div class="cu-det-txt">
                                <p> Plot No. 100, 12th street, Aurangabad.</p>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">

            <div class="row">


                <div class="m-auto">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#">
                                <img src="assets/images/whatsapp1.svg" alt="">
                            </a></li>
                        <li><a class="facebook" href="#">
                                <img src="assets/images/instagram.svg" alt="">
                            </a></li>
                        <li><a class="facebook" href="#">
                                <img src="assets/images/linkedin.svg" alt="">
                            </a></li>
                        <li><a class="facebook" href="#">
                                <img src="assets/images/facebook.svg" alt="">
                            </a></li>
                        <li><a class="facebook" href="#">
                                <img src="assets/images/twitter.svg" alt="">
                            </a></li>
                    </ul>
                </div>


            </div>

            <!-- footer for about us only -->
            <footer>
                <div class="abt-footer mt-3">
                    <p>© All Rights Reserved By VeGO 2020-21</p>
                </div>
            </footer>
            <!-- footer for about us only ends -->
        </div>
    </footer>

    <!-- Option 1: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="assets/js/site.js"></script>
</body>

</html>
