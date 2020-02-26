@extends('layout.admin_dashboard')
@section('body')
	<h1 style="text-align: center;">All Candidates List<h1><hr>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<table class="table" border="1px solid black">
			<thead class="thead-dark">
				<tr>
					<td scope="col">First Name</td>
					<td scope="col" scope="col" scope="col">Last Name</td>
					<td scope="col">Email</td>
					<td scope="col">Date Of Birth</td>
					<td scope="col">Phone</td>
					<td scope="col">Education</td>
					<td scope="col">Skill</td>
					<td scope="col">Address</td>
					<td scope="col">Action</td>
				</tr>
			</thead>
		@foreach($data as $value)
			<tr>
				<td>{{ $value->firstName }}</td>
				<td>{{ $value->lastName }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->DOB }}</td>
				<td>{{ $value->phone }}</td>
				<td>{{ $value->degree }}</td>
				<td>{{ $value->skill }}</td>
				<td>{{ $value->city }}</td>
				
				<td><a href="/candidate_delete/{{ $value->id }}"><button style="border: 1px solid black;background-color: red;">Delete</button></a></td>
			</tr>
		@endforeach
		</table>
@endsection