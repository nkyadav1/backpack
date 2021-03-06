<form id="login-form" name="login-form" action="{{url('/user/login')}}" method="post">
    @csrf
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">Sign-in into your account</h4>
</div>

<div class="modal-body">
	<div class="row gap-20">
	
		<div id="login-errors" class="col-xs-12 col-md-12">
			
		</div><!--
		<div class="col-xs-12 col-md-12 mt-5">
			<button class="btn btn-google-plus btn-block">sign-in with Google+</button>
		</div>
		
		<div class="col-xs-12 col-md-12">
			<div class="login-modal-or">
				<div><span>or</span></div>
			</div>
		</div>-->
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group"> 
				<label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required="required" id="login-email"> 
			</div>		
		</div>              
		
		<div class="col-xs-12 col-sm-12 col-md-12">		
			<div class="form-group"> 
				<label>Password</label>
                                <input class="form-control" placeholder="Enter Your Password" type="password" required="required" name="password" id="login-password">
			</div>		
		</div>
		
<!--		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="checkbox-block"> 
				<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
				<label class="" for="remember_me_checkbox">Remember me</label>
			</div>
		</div>-->
		
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="login-box-link-action">
				<a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a>
			</div>
		</div>		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="register-box-box-action">
				No account? <a data-toggle="modal" href="javascript:void(0)" class="registerModal">Register</a>
			</div>
		</div>
		
	</div>
</div>


<div class="modal-footer text-center">
	<button type="submit" class="btn btn-primary">Log-in</button>
	<button type="button" data-dismiss="modal" class="btn btn-dark">Close</button>
</div>
</form>

<script type="text/javascript">
    $('#login-form').on('submit', function (e) {
        e.preventDefault();
        var formData = $('#login-form').serializeArray();
        var url = $('#login-form').attr('action');
        var $modalRegister = $('#ajaxRegisterModal');
        var $modal = $('#ajaxLoginModal');
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            contentType: "application/x-www-form-urlencoded",
            success: function (responseData, textStatus, jqXHR) {
                $('#login-errors').html('<p style="color: green;">Logged In Successful.</p>');
                notice('You have succesfully Logged In.');
                $modalRegister.modal('hide');
                $modal.modal('hide');
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#login-errors').html('<p style="color: red;">' + errorThrown + '</p>');
                var errorMessage = errorThrown;
                if (jqXHR.status == 422) {
                    $.each(jqXHR.responseJSON.errors, function (k, v) {
                        errorMessage+='\n'+v[0];
                        $('#login-errors').append('<p style="color: red;">' + v[0] + '</p>');
                    });
                }
                notice(errorMessage,'error');
            }
        });
    });
</script>