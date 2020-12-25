@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
      <!-- contact us -->
      <section>
        <div class="blackbg">
            <img src="assets/images/contactbg.jpg" alt="">
        </div>
        <div class="con-heading">
            <h5>Contact Us</h5>
        </div>
        <div class="con-info defaultcard">
            <div class="con-mob">
                <span>Feel Free to Contact us Anytime...</span>
                <div class="con-mob1">
                    <img src="assets/images/call1.svg" alt="">
                    <p>+91 9405962442</p>
                </div>
                <div class="con-mob2">
                    <img src="assets/images/call1.svg" alt="">
                    <p>+91 9405962442</p>
                </div>
            </div>


            <span>Visit Our Office...</span>

            <div class="con-address">
                <img src="assets/images/address.svg" alt="">
                <p>CL-2-9/3, 12th Scheme, Shivajinagar, Aurangabad.</p>
            </div>
            
            <span>Our Social Links</span>
            
            <div class="sociallinks-c">
                <div class="socialitem">
                    <img src="assets/images/instagram.svg" alt="">
                </div>
                <div class="socialitem">
                    <img src="assets/images/twitter.svg" alt="">
                </div>
                <div class="socialitem">
                    <img src="assets/images/facebook.svg" alt="">
                </div>
                <div class="socialitem">
                    <img src="assets/images/whatsapp1.svg" alt="">
                </div>
                <div class="socialitem">
                    <img src="assets/images/linkedin.svg" alt="">
                </div>
            </div>
        </div>
        
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=
        aurangabad+(My%20Business%20Name)
        &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
       </iframe>
        
    </section>
    <!-- contact us ends -->

    <!-- contact form -->
    <section>
        <div class="defaultcard cont-form1">
            <div class="heading">
                <h5>Get In Touch With Us</h5>
                <hr class="headingunderline">
            </div>
            <div class="cont-form">
                <form>
                    <div class="form-group">
                      <input type="text" class="form-control inp-cont" id="exampleFormControlInput1" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control inp-cont" id="exampleFormControlInput2" placeholder="Last Name">
                      </div>
                    <div class="form-group">
                     
                      <select class="form-control inp-cont" id="exampleFormControlSelect1">
                        <option>Maharashtra</option>
                        <option>Goa</option>
                        <option>Gujrat</option>
                        <option>West Bengal</option>
                      </select>
                    </div>
                   
                    <div class="form-group">
                     
                      <textarea class="form-control inp-cont" id="exampleFormControlTextarea1" rows="3">Write Us...</textarea>
                    </div>
                    <div class="form-group cont-submit">
                        <a href="" class="btn cont-sub">Submit</a>
                    </div>
                  </form>
            </div>

        </div>
    </section>
    <!-- contact form ends -->
 
@endsection

  
  
  