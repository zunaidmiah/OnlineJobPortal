@extends('layout/candidate')
@section('body')

        	<form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <center><h2>Serach Your Job</h2></center> 
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                               <select name="category" class="form-control search-slt" id="exampleFormControlSelect1">
                               		<option>Choose Your Catagory</option>
    								<option value="Accounting/Finance">Accounting/Finance</option>
    								<option value="Bank">Bank</option>
    								<option value="NGO/Development">NGO/Development</option>
    								<option value="It">It</option>
    								<option value="Marketing/Sells">Marketing/Sells</option>
    								<option value="Web Design & Developer">Web Design & Developer</option>
    								<option value="Law/Legal">Law/Legal</option>
    								<option value="Design/creative">Design/creative</option>
    								<option value="Engineer/Architect">Engineer/Architect</option>
    								<option value="Data Entry/Operator">Data Entry/Operator</option>
    								<option value="Garments/Texttile">Garments/Texttile</option>
    								<option value="Beauty care/Health">Beauty care/Health</option>
  								</select>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select name="location" class="form-control search-slt" id="exampleFormControlSelect1">
                                	<option>Choose Your City</option>
    								<option value="Dhaka">Dhaka</option>
    								<option value="Barisal">Barisal</option>
    								<option value="Chattogram">Chattogram</option>
    								<option value="Rajshahi">Rajshahi</option>
    								<option value="Khulna">Khulna</option>
    								<option value="Sylhet">Sylhet</option>
    								<option value="Rangpur">Rangpur</option>
    								<option value="Mymensingh">Mymensingh</option>
  								</select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
			
			<br>
			<div class="page">
			<div class="left">
				<div class="category">
					<b>=Search By Category</b><br><br>
					<a href="/search_job_catagory/{{$id='Accounting'}}">>Accounting/Finance</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Bank'}}">>Bank</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Development'}}">>NGO/Development</a><br><br>
					<a href="/search_job_catagory/{{$id='It'}}">>It</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Marketing'}}">>Marketing/Sells</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Web Design'}}">>Web Design & Developer</a><br><br>
					<a href="/search_job_catagory/{{$id='Law'}}">>Law/Legal</a> &nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Design'}}">>Design/creative</a>&nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Architect'}}">>Engineer/Architect</a><br><br>
					<a href="/search_job_catagory/{{$id='Operator'}}">>Data Entry/Operator</a>&nbsp&nbsp&nbsp&nbsp
					<a href="/search_job_catagory/{{$id='Garments'}}">>Garments/Texttile</a>&nbsp&nbsp&nbsp&nbsp<br><br>
					<a href="/search_job_catagory/{{$id='Health'}}">>Beauty care/Health</a><br>
					
				</div>
			</div>
			<div class="right">
				<div class="division">
					<b>=Search By Division</b><br><br>
					<a href="/search_job_division/{{$id='Dhaka'}}">Dhaka</a>
					<a href="/search_job_division/{{$id='Barisal'}}">Barisal</a><br><br>
					<a href="/search_job_division/{{$id='Chattogram'}}">Chattogram</a>
					<a href="/search_job_division/{{$id='Rajshahi'}}">Rajshahi</a><br><br>
					<a href="/search_job_division/{{$id='Khulna'}}">Khulna</a>
					<a href="/search_job_division/{{$id='Sylhet'}}">Sylhet</a><br><br>
					<a href="/search_job_division/{{$id='Rangpur'}}">Rangpur</a>
					<a href="/search_job_division/{{$id='Mymensingh'}}">Mymensingh</a><br><br>
				</div>
				<br>
				<div class="division">
					<b>=Search By Job Type</b><br><br>
					<a href="/search_job_type/{{$id='Part Time'}}">>Part Time</a><br><br>
					<a href="/search_job_type/{{$id='Full Time'}}">>Full Time</a><br>
				</div>
			</div>
		</div>
		
		<br>
		<table border="0" cellpadding="0" height="400px" width="1100px" bgcolor="gray">
			<tr>
				<td height="100%" width="50%">
					<img src="{{ asset('images/homepage/job1.jpg')}}" height="400px" width="550px">
				<td>
				<td height="100%" width="50%">
					<center>
						<h1>Let's grow together.</h1>
						<h2>Your best work starts here.</h2>
					</center>
				</td>
			</tr>
		</table>
		<br>
		<table border="0" cellpadding="0" height="400px" width="1100px" bgcolor="lightgray">
			<tr>
				<td height="100%" width="50%">
					<center>
						<h1>Apply Now</h1>
						<h2>Let's Choose your dream Job</h2>
					</center>
				</td>
				<td height="100%" width="50%">
					<img src="{{ asset('images/homepage/job.jpg')}}" height="400px" width="550px">
				<td>
			</tr>
		</table>
		@endsection