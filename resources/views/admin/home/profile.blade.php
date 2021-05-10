@extends('admin.layouts.app')
@section('content')


<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<h4 class="page-title">User Profile</h4>
					<div class="row">
						<div class="col-md-8">
							<div class="card card-with-nav">
								<div class="card-header">
									<div class="row row-nav-line">
										<ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-3" role="tablist">
											
											<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab" aria-selected="false">Change Password</a> </li>
										</ul>
									</div>
								</div>
								
								<div class="tab-content" id="myTabContent">
								  	<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										  	
										<div class="card-body" >
											{{Form::model($data,['id'=>'submit-form','files'=>true])}}
											<div class="row mt-3">
												<div class="col-md-6">

													<div class="form-group form-group-default">
														<label>Name</label>
														{{Form::text('name',null,['class'=>'form-control name','placeholder'=>'Name','id'=>'name'])}}
														
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Email</label>
														{{Form::email('email',null,['class'=>'form-control name','placeholder'=>'Email','id'=>'email'])}}
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="form-group form-group-default">
													<label class="">Profile</label>
													<input type="file" id="profile_picture" data-default-file="{{($data->profile_picture && file_exists($data->profile_picture))?url($data->profile_picture):''}}" name="profile_picture" class="dropify" data-height="150" data-show-remove="false" data-allowed-file-extensions="png jpeg jpg gif" data-max-file-size="3M" data-allowed-formats="square landscape"/> 
												</div>
											</div>
										
										
											
											<div class="text-right mt-3 mb-3">
												<button type="submit" id="submit-btn" class="btn btn-success"><span id="licon"></span>Save</button>
												
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
											{{Form::close()}}
										</div>
								   	</div>
									<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
										<div class="card-body" >
											
											{{Form::model(null,['id'=>'submit-form2' ,'route' => array('admin.changepassword', $data->id) ])}}

											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Current Password</label>
														{{Form::password('current_password',['class'=>'form-control','id'=>'current_password','placeholder'=>'Current Password'])}}
													</div>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>New Password</label>
														{{Form::password('new_password',['class'=>'form-control','placeholder'=>'New Password','id'=>'new_password'])}} 
													</div>
												</div>
											</div>
											
											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Confirm New Password</label>
														{{Form::password('confirm_password',['class'=>'form-control','placeholder'=>'Confirm Password','id'=>'confirm_password'])}} 
													</div>
												</div>
											</div>
											
                	
											<div class="text-right mt-3 mb-3">
												<button type="submit" id="submit-btn2" class="btn btn-success"><span id="licon"></span>Save</button>
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
											{{Form::close()}}               

										</div>

									</div>
								</div>


															</div>
						</div>
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url('{{asset('admin')}}/img/blogpost.jpg')">
									<div class="profile-picture">
										<div class="avatar avatar-xl">
											@if(file_exists(Auth::guard('admin')->user()->profile_picture))
						                        <img src="{{url(Auth::guard('admin')->user()->profile_picture)}}" alt="user" class="avatar-img rounded-circle" width="31">
						                    @else
						                    	<img src="{{url('public/admin//img/profile.jpg')}}" alt="user" class="avatar-img rounded-circle" width="31">
						                    @endif
											
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name">{{Auth::guard('admin')->user()->name}}</div>
										<div class="job">Admin</div>
									<!-- 	<div class="desc">A man who hates loneliness</div> -->
										<div class="social-media">
											<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
												<span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
											</a>
										</div>
										<!-- <div class="view-profile">
											<a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
										</div> -->
									</div>
								</div>
								<div class="card-footer">
									<div class="row user-stats text-center">
										<div class="col">
											<div class="number">125</div>
											<div class="title">Post</div>
										</div>
										<div class="col">
											<div class="number">25K</div>
											<div class="title">Followers</div>
										</div>
										<div class="col">
											<div class="number">134</div>
											<div class="title">Following</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
<!-- <div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">{{$title}}</h4>
				{{Form::model($data,['id'=>'submit-form','files'=>true])}}
				<div class="form-group m-t-20">
					<label class="">Name</label>
					{{Form::text('name',null,['class'=>'form-control name','placeholder'=>'Name','id'=>'name'])}}
				</div>
				<div class="form-group">
					<label class="">Email</label>
					{{Form::email('email',null,['class'=>'form-control name','placeholder'=>'Email','id'=>'email'])}}
				</div>
				<div class="form-group">
					<label class="">Profile</label>
					<input type="file" id="profile_picture" data-default-file="{{($data->profile_picture && file_exists($data->profile_picture))?url($data->profile_picture):''}}" name="profile_picture" class="dropify" data-height="150" data-show-remove="false" data-allowed-file-extensions="png jpeg jpg gif" data-max-file-size="3M" data-allowed-formats="square landscape"/> 
				</div>
				<button type="submit" id="submit-btn" class="btn btn-secondary btn-block"><span id="licon"></span>Save</button>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div> -->
@endsection
@section('scripts')
<script>
$(function(){
	$('#submit-form').ajaxForm({
		beforeSubmit:function(){
			$(".error").remove();
			disable("#submit-btn",true); 
		},
		error:function(err){ 
			handleError(err);
			disable("#submit-btn",false);  
		},
		success:function(response){ 
			disable("#submit-btn",false); 
			if(response.status=='true'){
				Alert(response.message);
			}else{
				Alert(response.message,false);
			}
		}
    }); 

	$('#submit-form2').ajaxForm({
        beforeSubmit:function(){
            $(".error").remove();
            disable("#submit-btn2",true); 
        },
        error:function(err){ 
            handleError(err);
            disable("#submit-btn2",false); 
        },
        success:function(response){ 
            disable("#submit-btn2",false); 
            if(response.status=='true'){
                Alert(response.message);
                window.location.href = '{{route("admin.profile")}}';
            }else{
                Alert(response.message,false);
            }
        }
    }); 

});


</script>
@endsection