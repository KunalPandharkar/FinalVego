@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')

    <!-- about us -->
    <section>
        <div class="blackbg">
            <img src="assets/images/contactbg.jpg" alt="">
        </div>
        <div class="con-heading">
            <h5>About Us</h5>
        </div>

        <div class="defaultcard txt-abt">

            <div class="abttxt">
                <span id="leftq">&#8220;</span>
                <span id="midtxt">We are here to provide everything for your vehicles and to facilitate you. VeGO will
                    make your ride endless and worryless !</span>
                <span id="rightq">&rdquo;</span>
            </div>
            <p>- Team VeGO</p>


        </div>

        <div class="defaultcard values-cont">
            <div class="heading">
                <h5>Our Values</h5>
                <hr class="headingunderline">
            </div>
            <div class="values-list">
                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value1.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Connected</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>

                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value2.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Support</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>

                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value3.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Teamwork</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>

                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value4.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Ownership</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>

                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value5.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Faster Service</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>

                <div class="valueitem">
                    <div class="valueicon">
                        <img src="assets/images/value6.svg" alt="">
                    </div>
                    <div class="valuetxt1">
                        <p>Future</p>
                    </div>
                    <div class="valuetxt2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, illum.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- about us ends -->




    <!-- our customers -->
    <section>
        <div class="defaultcard">
            <div class="heading">
                <h5>Our Customers</h5>
                <hr class="headingunderline">
            </div>
            <div class="brands-list">

                <div class="brand-item">
                    <img src="assets/images/brand1.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand2.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand3.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand4.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand5.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand6.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand7.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand8.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand9.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand10.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand11.svg" alt="">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand12.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- our customers ends-->


    <!-- customer reviews -->
    <section class="defaultcard revcont">
        <div class="heading">
            <h5>From Our Customers</h5>
            <hr class="headingunderline">
        </div>

        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
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
            <a class="carousel-control-prev nav-review1" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next nav-review2" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- customer reviews ends -->

    <!-- out team -->
    <section class="defaultcard">
        <div class="heading">
            <h5>Meet Our Team</h5>
            <hr class="headingunderline">
        </div>
        <div class="team-list">

            <div class="team-item">
                <div class="teamicon">
                    <!-- <div class="teamiconbg">
                       <img src="assets/images/contactbg.jpg" alt="">
                   </div> -->
                    <div class="teamiconper">
                        <img src="assets/images/teammember.jpg" alt="">
                    </div>
                </div>
                <div class="teamtxt">
                    <div class="teamname">
                        <p>Kunal Pandharkar</p>
                    </div>
                    <div class="teamdes">
                        <p>CEO & Founder</p>
                    </div>
                    <div class="teammail">
                        <p>kunalpandharkar17@gmail.com</p>
                    </div>
                </div>
                <div class="teambtn">
                    <a href="" class="btn teambtn1">Contact</a>
                </div>
            </div>

            <div class="team-item">
                <div class="teamicon">
                    <!-- <div class="teamiconbg">
                       <img src="assets/images/contactbg.jpg" alt="">
                   </div> -->
                    <div class="teamiconper">
                        <img src="assets/images/teammember.jpg" alt="">
                    </div>
                </div>
                <div class="teamtxt">
                    <div class="teamname">
                        <p>Chaittnya Shinde</p>
                    </div>
                    <div class="teamdes">
                        <p>CTO & Developer</p>
                    </div>
                    <div class="teammail">
                        <p>chaittnyashinde@gmail.com</p>
                    </div>
                </div>
                <div class="teambtn">
                    <a href="" class="btn teambtn1">Contact</a>
                </div>
            </div>

            <div class="team-item">
                <div class="teamicon">
                    <!-- <div class="teamiconbg">
                       <img src="assets/images/contactbg.jpg" alt="">
                   </div> -->
                    <div class="teamiconper">
                        <img src="assets/images/teammember.jpg" alt="">
                    </div>
                </div>
                <div class="teamtxt">
                    <div class="teamname">
                        <p>Pawan Lahoti</p>
                    </div>
                    <div class="teamdes">
                        <p>Business Guide</p>
                    </div>
                    <div class="teammail">
                        <p>pawanlahoti@gmail.com</p>
                    </div>
                </div>
                <div class="teambtn">
                    <a href="" class="btn teambtn1">Contact</a>
                </div>
            </div>
        </div>
    </section>
    <!-- out team ends -->

    <!-- footer for about us only -->
    <footer>
        <div class="defaultcard abt-footer">
            <p>© All Rights Reserved By VeGO 2020-21</p>
        </div>
    </footer>
    <!-- footer for about us only ends -->

@endsection
