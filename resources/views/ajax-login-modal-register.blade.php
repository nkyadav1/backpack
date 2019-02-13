<form id="register-form" action="{{url('/user/save')}}" name="register-form" method="post">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<div class="modal-body">

	<div class="row gap-20">
	
<!--		<div class="col-xs-12 col-md-12">
			<button class="btn btn-facebook btn-block">Register with Facebook</button>
		</div>
		<div class="col-xs-12 col-md-12 mt-5">
			<button class="btn btn-google-plus btn-block">Register with Google+</button>
		</div>
		
		<div class="col-xs-12 col-md-12">
			<div class="login-modal-or">
				<div><span>or</span></div>
			</div>
		</div>
		-->
                <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group"> 
				<label>Name</label>
                                <input id="register-name" class="form-control" placeholder="Enter Your Name" type="text" name="name" pattern="/[A-Za-z _]/" required="required">
			</div>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="form-group"> 
				<label>Email Address</label>
                                <input name="email" id="register-email" class="form-control" placeholder="Enter your email address" type="email" required="required">
			</div>
		
		</div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group"> 
				<label>Mobile</label>
                                <input id="register-mobile" class="form-control" name="mobile" placeholder="Enter your Mobile Number" type="tel" minlength="10" maxlength="10" required="required"> 
			</div>
		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
		
			<div class="form-group"> 
				<label>Password</label>
                                <input class="form-control" placeholder="Min 6 and Max 20 characters" type="password" name="password" id="register-password" required="required" minlength="6" maxlength="20"> 
			</div>
		
		</div>
		
<!--		<div class="col-xs-12 col-sm-12 col-md-12">
		
			<div class="form-group"> 
				<label>Password Confirmation</label>
				<input class="form-control" placeholder="Re-type password again" type="password" name="confirm-password" id="register-confirm-password"> 
			</div>
		
		</div>-->
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="checkbox-block"> 
<!--				<input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox"> -->
				<label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="login-box-box-action">
				Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
			</div>
		</div>
		
	</div>

</div>

<div class="modal-footer text-center">
	<button type="button" class="btn btn-primary">Register</button>
	<button type="button" data-dismiss="modal" class="btn btn-dark">Close</button>
</div>
</form>