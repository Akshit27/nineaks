@extends('admin.layouts.app')
@section('content')
<div class="row">
	@if(getPermission('Users'))
	<div class="col-md-6 col-lg-4">
		<a href="{{route('admin.users.index')}}">
			<div class="card card-hover">
				<div class="box bg-cyan text-center">
					<h1 class="font-light text-white">{{number_format($users_count)}}</h1>
					<h6 class="text-white">Users</h6>
				</div>
			</div>
		</a>
	</div> 
	@endif
	@if(getPermission('CPA'))
	<div class="col-md-6 col-lg-4">
		<a href="{{route('admin.cpa.index')}}">
			<div class="card card-hover">
				<div class="box bg-cyan text-center">
					<h1 class="font-light text-white">{{number_format($cpa_count)}}</h1>
					<h6 class="text-white">CPA</h6>
				</div>
			</div>
		</a>
	</div>
	@endif
	@if(getPermission('EfilingHistroy'))
	<div class="col-md-6 col-lg-4">
		<a href="{{route('admin.efiling-history.index')}}">
			<div class="card card-hover">
				<div class="box bg-cyan text-center">
					<h1 class="font-light text-white">{{number_format($efiling_requests)}}</h1>
					<h6 class="text-white">Efiling Requests</h6>
				</div>
			</div>
		</a>
	</div>
	@endif
	@if(getPermission('WithdrawRequests'))
	<div class="col-md-6 col-lg-4">
		<a href="{{route('admin.withdraw-requests.index')}}">
			<div class="card card-hover">
				<div class="box bg-cyan text-center">
					<h1 class="font-light text-white">{{number_format($withdraw_requests)}}</h1>
					<h6 class="text-white">Pending Withdraw Requests</h6>
				</div>
			</div>
		</a>
	</div> 
	@endif
</div>
@if(getPermission('Dashboard'))
<div class="row">
	<div class="col-md-12">
		<h4>Earnings</h4>
	</div>
	<div class="col-md-6 col-lg-4"> 
		<div class="card card-hover">
			<div class="box bg-cyan text-center">
				<h1 class="font-light text-white">${{number_format($today_earning,2)}}</h1>
				<h6 class="text-white">Today's earning</h6>
			</div>
		</div> 
	</div>
	<div class="col-md-6 col-lg-4"> 
		<div class="card card-hover">
			<div class="box bg-cyan text-center">
				<h1 class="font-light text-white">${{number_format($this_week_earning,2)}}</h1>
				<h6 class="text-white">This week's earning</h6>
			</div>
		</div> 
	</div>
	<div class="col-md-6 col-lg-4"> 
		<div class="card card-hover">
			<div class="box bg-cyan text-center">
				<h1 class="font-light text-white">${{number_format($this_month_earning,2)}}</h1>
				<h6 class="text-white">This month's earning</h6>
			</div>
		</div> 
	</div>
	<div class="col-md-6 col-lg-4"> 
		<div class="card card-hover">
			<div class="box bg-cyan text-center">
				<h1 class="font-light text-white">${{number_format($this_year_earning,2)}}</h1>
				<h6 class="text-white">This year's earning</h6>
			</div>
		</div> 
	</div>
	<div class="col-md-6 col-lg-4"> 
		<div class="card card-hover">
			<div class="box bg-cyan text-center">
				<h1 class="font-light text-white">${{number_format($lifetime_earning,2)}}</h1>
				<h6 class="text-white">Lifetime earning</h6>
			</div>
		</div> 
	</div>
</div>
@endif
@endsection