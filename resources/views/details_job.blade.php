@extends('layout/candidate')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/single_job.css') }}">
	<center><h2>Job Details</h2></center><hr>
	@foreach($job as $value)
	<form action="/apply_job/{{ $value->id }}" method="get" class="job_details_form">
		@csrf
		
		<div class="job_details">
			<h3>{{ $value->jobTitle }}</h3>
			<h4>{{ $value->companyName }}</h4><br>
			<h5>Vacancy</h5>
			<h6>{{ $value->vacancy }}</h6><br>
			<h5>Job Catagory</h5>
			<h6>{{ $value->jobCatagory }}</h6><br>
			<h5>Educational Requirement</h5>
			<h6>{{ $value->educationalRequirement }}</h6><br>
			<h5>Employment Status</h5>
			<h6>{{ $value->jobType }}</h6><br>
			<h5>Experience Requirements</h5>
			<h6>{{ $value->experience }}</h6><br>
			<h5>Job Location</h5>
			<h6>{{ $value->jobLocation }}</h6><br>
			<h5>Salary</h5>
			<h6>{{ $value->salary }}</h6><br>
			<h5>Job Context</h5>
			<h6>{{ $value->description }}</h6><br><br><br><br>
			<button>Apply</button>
		</div>
		
	</form>
	@endforeach
@endsection