@extends('layout/candidate')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/job_list.css') }}">
	<center><h2>Job List</h2><hr></center>
	@foreach($job as $value)
		<div class="job_list">
			<h2>{{ $value->jobTitle }}</h2>
			<h5><i class="fa fa-industry" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->companyName }}</h5>
			<h5><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->jobType }}</h5>
			<h5><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->vacancy }}</h5>
			<h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;{{ $value->jobLocation }}</h5>
			<a href="/details_job/{{ $value->id }}"><button class="btn1">See Details</button></a>
			<a href="/apply_job/{{ $value->id }}"><button class="btn2">Apply</button></a>
		</div>
	@endforeach
@endsection