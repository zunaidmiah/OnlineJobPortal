@extends('layout.employee')
@section('body')
	<h1 style="text-align: center;">Pending Job List<h1><hr>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<table class="table" border="1px solid black;">
			<thead class="thead-dark">
				<tr>
					<td scope="col">Company Name</td>
					<td scope="col" scope="col" scope="col">Job Tilte</td>
					<td scope="col" scope="col">Vacancy</td>
					<td scope="col">Job Type</td>
					
					<td scope="col">Job Location</td>
					<td scope="col">Job Category</td>
					<td scope="col">Experience</td>
					<td scope="col">Salary</td>
					<td scope="col">Job Description</td>
					<td scope="col">Action</td>
				</tr>
			</thead>
		@foreach($data as $value)
			<tr>
				<td>{{ $value->companyName }}</td>
				<td>{{ $value->jobTitle }}</td>
				<td>{{ $value->vacancy }}</td>
				<td>{{ $value->jobType }}</td>
				
				<td>{{ $value->jobLocation }}</td>
				<td>{{ $value->jobCatagory }}</td>
				<td>{{ $value->experience }}</td>
				<td>{{ $value->salary }}</td>
				<td>{{ $value->description }}</td>
				<td>
					<a href="/jobs_delete/{{ $value->id }}"><button style="border: 1px solid black;background-color: red;">Delete</button></a>
				</td>
			</tr>
		@endforeach
		</table>
	
@endsection