@extends('layout/candidate')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cv_style.css') }}">
	<center><h1 style="color: hsl(147, 50%, 47%);">CV</h1></center><hr><hr>
	@foreach($data as $value)
	<form action="/delete_cv/{{ $value->id }}" method="get" class="form">
		
		<div class="cv_form">
			<div class="first">
				<h3>{{ $value->name}}</h3>
				<h5><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->phone }}</h5>
				<h6><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->facebookLink }}</h6>
				<h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->email }}</h5>
			</div>
			<div class="second">
				<h2><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;About Carrer</h2><hr>
				<h5>{{ $value->aboutCareer }}</h5>
			</div>
			<div class="third">
				<h2><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;Experience</h2><hr>
				<h4>Company Name: {{ $value->workingCompany }}</h4>
				<h5>Duration: {{ $value->workingDuration }}</h5>
			</div>
			<div class="fourth">
				<h2><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Education</h2><hr>
				<h4>Institutio Name: {{ $value->Institution }}</h4>
				<h5>Department/Group: {{ $value->background }}</h5>
			</div>
			<div class="five">
				<h2><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Skills</h2><hr>
				<ul>
					<li>{{ $value->skill1 }}</li>
					<li>{{ $value->skill2 }}</li>
					<li>{{ $value->skill3 }}</li>
				</ul>
			</div>
			<div class="six">
				<h2><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Personal Information</h2><hr>
				<h5>Name: {{ $value->name }}</h5>
				<h5>Father Name: {{ $value->fatherName }}</h5>
				<h5>Date Of Birth: {{ $value->DOB }}</h5>
				<h5>Address: {{ $value->city }}</h5>
				<h5>Email: {{ $value->email }}</h5>
			</div>

		</div>
		<button>Delete</button>
		@endforeach
	</form>
	
@endsection