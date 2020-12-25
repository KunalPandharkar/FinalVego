@extends('layouts.mainlayout')
@section('title', 'VeGO-Aapka Apna Garage!')
@section('searchbar')
@endsection
@section('userlocation')
@endsection

@section('content')
     <!-- register form -->
     <section>
        <div class="topshowrooms">

            <form id="regForm" action="/action_page.php">


                <div class="heading">
                    <h5>Service Center Details</h5>
                    <hr class="headingunderline">
                </div>
                <div class="regform-cont">
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Service Center Name :<span
                                class="required-f">*</span></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group fg1 fg-browse">
                        <label for="your_email">Service Center Photos : ( Min : 6 and Max: 10 )</label>
                        <input type="file" name="files[]" id="files" multiple accept="image/jpeg, image/png, image/gif,"
                            class="imageupload">
                        <output id="Filelist"></output>
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Brand :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput3">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Type :</label>
                        <select class="custom-select fg2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">2-Wheeler</option>
                            <option value="2">3-Wheeler</option>
                            <option value="3">4-Wheeler</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Center Type :</label>
                        <select class="custom-select fg2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">Local</option>
                            <option value="2">Authorized</option>
                         
                        </select>
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlTextarea1">Service Center Address :<span
                                class="required-f">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">State :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput3">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">City :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput4">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Services :<span class="required-f">*</span></label>
                        <select class="custom-select fg2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Owner Name :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput6">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Mobile No. 1 :<span class="required-f">*</span></label>
                        <input type="email" class="form-control" id="exampleFormControlInput5">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Mobile No. 2 :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput5">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Whatsapp No :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput5">
                    </div>
                 
                </div>


                <div class="heading">
                    <h5>Service Center Timings</h5>
                    <hr class="headingunderline">
                </div>
                <div class="regform-cont">

                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Opening Time :<span class="required-f">*</span></label>
                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                    </div>
                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Closing Time :<span class="required-f">*</span></label>
                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Tuesday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Wednesday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Thursday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Friday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                        </div>
                        <div class="form-check form-check-inline fi1">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Sunday</label>
                        </div>
                    </div>
                </div>


                <div class="heading">
                    <h5>Service Center Location</h5>
                    <hr class="headingunderline">
                </div>
                <div class="regform-cont">

                    <div class="form-group fg1">
                        <label for="exampleFormControlInput1">Service Center Address :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput5">
                    </div>
                    <div class="locationbtn">
                        <a href="" class="btn">Use Current Location</a>
                    </div>
                    <div class="form-group">
                        <iframe id="googlemap"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15073.234307308167!2d77.02138377450119!3d19.181720042435785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f853c6a83fbf800!2sPurna%20Junction!5e0!3m2!1sen!2sin!4v1597152317620!5m2!1sen!2sin"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>

                <div class="regsbtbtndiv">
                    <a href=""><button type="button" class="btn regsbtbtn" id="sbtBtn">Submit</button></a>
                </div>

            </form>


        </div>
    </section>
    <!-- register form ends -->
  
@endsection
   