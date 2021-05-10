@extends('admin.layouts.auth')
@section('content')


        

<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In To Admin</h3>

            <form method="POST" action="{{ route('admin.login') }}" id="loginform">
                        @csrf

			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="email" name="email" type="text" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
					<label for="email" class="placeholder">Username</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-group form-floating-label">
					
					<input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" required>
					<label for="password" class="placeholder">Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
					  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">

						<input type="checkbox" class="custom-control-input" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
						<label class="custom-control-label" for="rememberme">Remember Me</label>
					</div>
					
					<a href="#" class="link float-right">Forget Password ?</a>
				</div>
				<br>
				<div class="form-action mb-3">
					<button type="submit" id="submit-btn" class="btn btn-primary btn-rounded btn-login">Sign In</a>
				</div>
				<!-- <div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div> -->
			</div>
		</form>
		</div>

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input  id="fullname" name="fullname" type="text" class="form-control input-border-bottom" required>
					<label for="fullname" class="placeholder">Fullname</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="passwordsignin" name="passwordsignin" type="password" class="form-control input-border-bottom" required>
					<label for="passwordsignin" class="placeholder">Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
				</div>
				<div class="form-group form-floating-label">
					<input  id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required>
					<label for="confirmpassword" class="placeholder">Confirm Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="form-action">
					<a href="#" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Cancel</a>
					<a href="#" class="btn btn-primary btn-rounded btn-login">Sign Up</a>
				</div>
			</div>
		</div>
	</div>









<!-- 


	<div id="loginform">
		<form autocomplete="off" class="form-horizontal m-t-20" id="loginform" method="post" action="{{route('admin.login')}}">
			{{csrf_field()}}
			<div class="row p-b-30">
				<div class="col-12">
					<div class="mb-3"> 
						<input autocomplete="off" type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="">
					</div>
					<div class="mb-3"> 
						<input name="password" id="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
					</div>
				</div>
			</div>
			<div class="row border-top border-secondary">
				<div class="col-12">
					<div class="form-group">
						<div class="p-t-20">
							<button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
							<button id="submit-btn" class="btn btn-success float-right" type="submit"><span id="licon"></span>Login</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div id="recoverform">
		<div class="text-center">
			<span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
		</div>
		<div class="row m-t-20">

			<form class="col-12" id="submit-form" action="{{route('admin.forgotpassword')}}" method="post">
				{{csrf_field()}}
				
				<div class="mb-3"> 
					<input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1"> 
				</div>
			
				<div class="row m-t-20 p-t-20 border-top border-secondary">
					<div class="col-12">
						<a class="btn btn-success" href="javascript:void(0)" id="to-login" name="action">Back To Login</a>
						<button id="submit-btn" class="btn btn-info float-right" type="submit"><span id="licon"></span> Recover</button>
					</div>
				</div>
			</form>
		</div>
	</div> -->
@endsection
@section('scripts')
<script>
$(document).ready(function() { 
	$('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){ 
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });

    // bind 'myForm' and provide a simple callback function 
    $('#loginform').ajaxForm({
    	beforeSubmit:function(){
    		$(".error").remove();
    		disable("#submit-btn",true); 
    	},
    	error:function(err){ 
    		handleError(err);
    		disable("#submit-btn",false); 
    	},
    	success:function(response){  
    		if(response.status=='true'){
    			window.location.href = response.url;
    		}else{
    			disable("#submit-btn",false); 
    			Alert(response.message,false);
    		}
    	}
    });

}); 
</script>	
@endsection