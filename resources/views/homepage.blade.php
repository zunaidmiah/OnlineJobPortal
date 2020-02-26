@extends('layout/home')
@section('body')
		<div class="page">
			<div class="left">
				<div class="category">
					<b>=Search By Category</b><br><br>
					<a href="/search_job_catagory_unregisterd/{{$id='Accounting'}}">>Accounting/Finance</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Bank'}}">>Bank</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Development'}}">>NGO/Development</a><br><br>
					<a href="/search_job_catagory_unregisterd/{{$id='It'}}">>It</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Marketing'}}">>Marketing/Sells</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Web Design'}}">>Web Design & Developer</a><br><br>
					<a href="/search_job_catagory_unregisterd/{{$id='Law'}}">>Law/Legal</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Design'}}">>Design/creative</a>&nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Architect'}}">>Engineer/Architect</a><br><br>
					<a href="/search_job_catagory_unregisterd/{{$id='Operator'}}">>Data Entry/Operator</a>&nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory_unregisterd/{{$id='Garments'}}">>Garments/Texttile</a>&nbsp&nbsp&nbsp&nbsp<br><br>
					<a href="/search_job_catagory_unregisterd/{{$id='Health'}}">>Beauty care/Health</a><br>
					
				</div>
			</div>
			<div class="right">
				<div class="division">
					<b>=Search By Division</b><br><br>
					<a href="/search_job_division_unregisterd/{{$id='Dhaka'}}">Dhaka</a>
					<a href="/search_job_division_unregisterd/{{$id='Barisal'}}">Barisal</a><br><br>
					<a href="/search_job_division_unregisterd/{{$id='Chattogram'}}">Chattogram</a>
					<a href="/search_job_division_unregisterd/{{$id='Rajshahi'}}">Rajshahi</a><br><br>
					<a href="/search_job_division_unregisterd/{{$id='Khulna'}}">Khulna</a>
					<a href="/search_job_division_unregisterd/{{$id='Sylhet'}}">Sylhet</a><br><br>
					<a href="/search_job_division_unregisterd/{{$id='Rangpur'}}">Rangpur</a>
					<a href="/search_job_division_unregisterd/{{$id='Mymensingh'}}">Mymensingh</a><br><br>
				</div>
				<br>
				<div class="division">
					<b>=Search By Job Type</b><br><br>
					<a href="/search_job_type_unregisterd/{{$id='Part Time'}}">>Part Time</a><br><br>
					<a href="/search_job_type_unregisterd/{{$id='Full Time'}}">>Full Time</a><br>
				</div>
			</div>
		</div>
		@endsection
		