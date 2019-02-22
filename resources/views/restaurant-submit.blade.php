@include('header')		
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <!-- start hero-header -->
    <div class="hero hero-breadcrumb" style="background-image:url('images/hero-header/03.jpg');">

        <div class="container">

            <h1>Add your restuarant</h1>
            <p>Get more eater &amp; Drinker</p>

        </div>

    </div>

    <div class="container pt-10 pb-30">

        <div class="breadcrumb-wrapper">

            <ol class="breadcrumb">

                <li><a href="#">Home</a></li>
                <li class="active">Add your restuarant</li>

            </ol>

        </div>

        <div class="row mt-40 mb-30">

            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                						<div id="notify-box" class="notify-box hidden">
                                                                
                                                                        <div id="notify-box-content" class="notify-inner">
                                                                                
<!--                                                                                <p> If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email.</p>
                                                                                
                                                                                <a href="#" class="btn btn-primary btn-sm btn-absolute">Sign-up</a>-->
                                                                                
                                                                        </div>
                                                                
                                                                </div>

                <div class="submite-list-wrapper">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="section-title-02 mb-20">

                                <h3><span>Basic Information</span></h3>

<!--										<p>Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>-->

                            </div>

                        </div>

                    </div>

                    <div class="submite-list-box">
                        <form id="restaurant-basic-details" name="restaurant-list-form" action="{{url('/restaurant/basic/save')}}" method="post">
                            @csrf
                            <div class="row ga-20">
                                <div class="col-xs-12 col-sm-12">									
                                    <div class="form-group form-group-lg">										
                                        <label>Restaurant name:</label>
                                        <input type="text" class="form-control" name="name" id="restaurant-name" minlength="5" maxlength="200" required="required" placeholder="Enter Restaurant Name" />											
                                    </div>									
                                </div>

                                <div class="col-xs-12 col-sm-12">									
                                    <div class="form-group bootstrap3-wysihtml5-wrapper">										
                                        <label>Restaurant information:</label>
                                        <textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter Restaurant Description." name="description" id="restaurant-description" style="height: 200px;" required="required"></textarea>											
                                    </div>										
                                </div>

                                <div class="col-xs-12 col-sm-12">												
                                    <div class="form-group">
                                        <label>Cuisine</label>
                                        <input type="text" class="form-control" id="autocompleteTagging" value="North Indian" id="restaurant-cusisines" name="cuisine" placeholder="Type to add Cuisines"  required="required"/>
                                    </div>										
                                </div>									
                            </div>

                            <h6 class="text-primary text-uppercase mt-15">Address &amp; Contact</h6>

                            <div class="row gap-20">

                                <div class="col-xs-12 col-sm-6">

                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control" name="street1" id="restaurant-street-1" required="required" placeholder="Address Line 1"/>
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-6">

                                    <div class="form-group">
                                        <label>Address line 2</label>
                                        <input type="text" class="form-control" name="street2" placeholder="Address Line 2"/>
                                    </div>

                                </div>

                                <div class="col-xss-12 col-xs-5 col-sm-4">												
                                    <div class="form-group">
                                        <label>City</label>
                                        <select id="restaurant-city" class="form-control" name="city" required="required">
                                            <option value="">Select City</option>
                                            <option value="Choti Sadri">Choti Sadri</option>
                                            <option value="Mandsaur">Mandsaur</option>
                                            <option value="Udaipur">Udaipur</option>
                                        </select>
                                    </div>										
                                </div>

                                <div class="col-xss-12 col-xs-7 col-sm-5">										
                                    <div class="row gap-20">										
                                        <div class="col-xs-8 col-sm-8">											
                                            <div class="form-group">
                                                <label>State</label>
                                                <select name="state" id="restaurant-state" class="form-control" required="required">
                                                    <option value="">Select State</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                </select>
                                            </div>											
                                        </div>

                                        <div class="col-xs-4 col-sm-4">											
                                            <div class="form-group">
                                                <label>Pincode</label>
                                                <input type="integer" minlength="6" maxlength="6" class="form-control" required="required" name="pincode" placeholder="Enter PinCode"/>
                                            </div>												
                                        </div>											
                                    </div>										
                                </div>

                                <div class="col-xss-12 col-xs-12 col-sm-3">												
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="custom-select">
                                            <option selected value="India">India</option>												
                                        </select>
                                    </div>										
                                </div>									
                                <div class="col-xss-12 col-xs-6 col-sm-3">												
                                    <div class="form-group">                                                                                    <label><i class="fa fa-phone-square">&nbsp;</i>Primary Phone</label>
                                        <input type="tel" minlength="10" maxlength="10" class="form-control" name="phone" required="required" placeholder="Enter 10 Digit phone number"/>										
                                    </div>
                                </div>

                                <div class="col-xss-12 col-xs-6 col-sm-3">

                                    <div class="form-group">
                                        <label><i class="fa fa-mobile-phone">&nbsp;</i>Secondary Phone</label>
                                        <input type="tel" class="form-control" name="phone2" maxlength="10" minlength="10" required="required" placeholder="Enter 10 digit number"/>
                                    </div>

                                </div>

                                <div class="col-xss-12 col-xs-6 col-sm-3">

                                    <div class="form-group">
                                        <label>Primary Email</label>
                                        <input type="email" class="form-control" name="email1" placeholder="Please enter a valid email"/>
                                    </div>

                                </div>

                                <div class="col-xss-12 col-xs-6 col-sm-3">

                                    <div class="form-group">
                                        <label>Secondary Email</label>
                                        <input type="email" class="form-control" name="email2" placeholder="Please enter a valid email"/>
                                    </div>

                                </div>

                                <!--									<div class="col-xss-12 col-xs-12 col-sm-6">
                                                                                                                                
                                                                                                                <div class="form-group">
                                                                                                                        <label>Website</label>
                                                                                                                        <input type="url" class="form-control" name="website"/>
                                                                                                                </div>
                                                                                                                
                                                                                                        </div>-->

                            </div>
                            <button type="submit" class="btn btn-success" >Save and Continue</button>
                        </form>
                        <h6 class="text-primary text-uppercase mt-15 hidden">Map</h6>

                        <div id="map-simple" class="map-submit mb-40 hidden"></div>

                        <h6 class="text-primary text-uppercase mt-15">Opening Hours</h6>

                        <div class="opening-hours-wrapper">
                            <form id="restaurant-timings" name="restaurant-timings" action="{{url('/restaurant/timings/save')}}" method="post">
                                @csrf
                                <div class="opening-hours-box">

                                    <div class="row gap-20">
                                        <input type="hidden" name="id" class="restaurant-id" value="" required=""/>
                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Monday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Tuesday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Wednesday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Thursday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Friday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Saturday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">

                                            <label class="day-name">Sunday</label>

                                            <div class="row gap-10">

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group from mb-15">
                                                        <span class="input-group-addon">from</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_from[]">
                                                    </div>

                                                </div>

                                                <div class=" col-xs-6 col-sm-6 col-md-6">

                                                    <div class="input-group to mb-15">
                                                        <span class="input-group-addon">to</span>
                                                        <input class="oh-timepicker form-control" type="text" name="open_hour_to[]">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-success" >Save and Continue</button>
                                </div>
                            </form>
                        </div>
                        
                        <h6 class="text-primary text-uppercase mt-15">More about us</h6>

<!--                        <div class="row gap-20">

                            <div class="col-xs-12 col-sm-12">

                                <label>Horizontal form</label>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">

                                <div class="form-group">
                                    <input type="text" class="form-control" />
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">

                                <div class="form-group">
                                    <input type="text" class="form-control" />
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">

                                <div class="form-group">
                                    <input type="text" class="form-control" />
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">

                                <span class="block font13 line-12 text-muted font-italic">You can add upto 5 options</span>
                                <div class="clearfix mb-15-xs">
                                    <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                </div>

                            </div>

                        </div>-->
<form id="restaurant-features" name="restaurant-features" action="{{url('/restaurant/features/save')}}" method="post">
    @csrf
                        <div class="row gap-20">
                            <input type="hidden" name="id" class="restaurant-id" value="" required=""/>
                            <div class="col-xs-12 col-sm-4">

                                <label>Good For</label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="good_for[]" placeholder="Good For 1"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="good_for[]" placeholder="Good For 2"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="good_for[]" placeholder="Good For 3"/>
                                </div>

<!--                                <div class="clearfix mb-15-xs">
                                    <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                    <span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
                                </div>-->

                            </div>

                            <div class="col-xs-12 col-sm-4">

                                <label>Features</label>  

                                <div class="form-group">
                                    <input type="text" class="form-control" name="feature[]" placeholder="Feature"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="feature[]" placeholder="Feature"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="feature[]" placeholder="Feature"/>
                                </div>


<!--                                <div class="clearfix mb-15-xs">
                                    <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                    <span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
                                </div>-->

                            </div>

                            <div class="col-xs-12 col-sm-4">

                                <label>Food & Drink</label>  

                                <div class="form-group">
                                    <input type="text" class="form-control" name="food[]" placeholder="Breakfast"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="food[]" placeholder="Lunch & Dinner"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="food[]" placeholder="Take-out"/>
                                </div>


<!--                                <div class="clearfix mb-15-xs">
                                    <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                    <span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
                                </div>-->
                            </div>

                        </div>

                        <div class="row gap-20 mt-15">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <label class="block">Payment options</label>

                            </div>

                            <div class="col-xs-12 col-sm-4">

                                <div class="checkbox-block font-icon-checkbox">
                                    <input id="filter_cuisine-1" name="paymentmode[]" type="checkbox" class="checkbox" value="Visa" />
                                    <label class="" for="filter_cuisine-1">Visa</label>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4">

                                <div class="checkbox-block font-icon-checkbox">
                                    <input id="filter_cuisine-2" name="paymentmode[]" type="checkbox" class="checkbox" value="Master Card"/>
                                    <label class="" for="filter_cuisine-2">Master card</label>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-4">

                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="checkbox-block font-icon-checkbox">
                                    <input id="filter_cuisine-3" name="paymentmode[]" type="checkbox" class="checkbox" value="American Express"/>
                                    <label class="" for="filter_cuisine-3">American Express</label>
                                </div>
                            </div>                           

                        </div>
    <button type="submit" class="btn btn-success" >Save and Continue</button>
</form>
                    </div>

                    <div class="row">

                        <div class="col-md-8">

                            <div class="section-title-02 mb-20">

                                <h3><span>Photos</span></h3>

                                <p>Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>

                            </div>

                        </div>

                    </div>

                    <div class="submite-list-box">
                        <div class="hidden">
                            <input id="common-restaurant-id" class="restaturant-id" value="" type="hidden"/>
                            <input id="token-id" class="token" value="{{ csrf_token() }}" type="hidden"/>
                        </div>
                        <div id="feature-image" class="dropzone">
                            <form id="feature_image">
                                <input name="feature_image" type="file">
                            </form>                            
                            <div class="dz-default dz-message"><span>Click or Drop Images Here</span></div>
                        </div>
                    </div>
                </div>

        </div>

    </div>

</div>
<script type="text/javascript">    
    $('#restaurant-basic-details').on('submit', function (e) {
        e.preventDefault();
        $('#notify-box').addClass('hidden');
        var formData = $('#restaurant-basic-details').serializeArray();
        var url = $('#restaurant-basic-details').attr('action');
        
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            contentType: "application/x-www-form-urlencoded",
            success: function (responseData, textStatus, jqXHR) {
                $('#notify-box-content').html('<p style="color: green;">Restaurant Registered Successfully.<br> Add more information userful to customer.</p>');
                $('#notify-box').removeClass('hidden');
                $('.restaurant-id').val(responseData.id);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#notify-box-content').html('<p style="color: red;">' + errorThrown + '</p>');
                if (textStatus == 422) {
                    $.each(jqXHR.responseJSON.errors, function (k, v) {
                        $('#notify-box-content').append('<p style="color: red;">' + v[0] + '</p>');
                    });                    
                }
                $('#notify-box').removeClass('hidden');
            }
        });
    });
    
    $('#restaurant-timings').on('submit', function (e) {
        e.preventDefault();
        $('#notify-box').html('').addClass('hidden');
        var formData = $('#restaurant-timings').serializeArray();
        var url = $('#restaurant-timings').attr('action');        
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            contentType: "application/x-www-form-urlencoded",
            success: function (responseData, textStatus, jqXHR) {
                $('#notify-box-content').html('<p style="color: green;">Restaurant Registered Successfully.<br> Add more information userful to customer.</p>');
                $('#notify-box').removeClass('hidden');
                $('.restaurant-id').val(responseData.id);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#notify-box-content').html('<p style="color: red;">' + errorThrown + '</p>');
                if (textStatus == 422) {
                    $.each(jqXHR.responseJSON.errors, function (k, v) {
                        $('#notify-box-content').append('<p style="color: red;">' + v[0] + '</p>');
                    });
                }
                $('#notify-box').removeClass('hidden');
            }
        });
    });
    $('#restaurant-features').on('submit', function (e) {
        e.preventDefault();
        $('#notify-box').html('').addClass('hidden');
        var formData = $('#restaurant-features').serializeArray();
        var url = $('#restaurant-features').attr('action');        
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            contentType: "application/x-www-form-urlencoded",
            success: function (responseData, textStatus, jqXHR) {
                $('#notify-box-content').html('<p style="color: green;">Restaurant Features Updated Successfully.<br> Add more information userful to customer.</p>');
                $('#notify-box').removeClass('hidden');                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#notify-box-content').html('<p style="color: red;">' + errorThrown + '</p>');
                if (textStatus == 422) {
                    $.each(jqXHR.responseJSON.errors, function (k, v) {
                        $('#notify-box-content').append('<p style="color: red;">' + v[0] + '</p>');
                    });
                }
                $('#notify-box').removeClass('hidden');
            }
        });
    });
</script>

<!-- JS for only submission page -->
<script type="text/javascript" src="{{url('/')}}/js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/dropzone.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery.ui.timepicker.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{url('/')}}/js/infobox.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/customs-submit.js"></script>
@include('footer')