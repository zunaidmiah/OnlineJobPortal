@extends('layout.employee')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{asset('css/job_post.css')}}">
	<form action="job_post" method="post">
  	<div class="container">
    <h1 style="text-align:center; ">Create New Job Post</h1>
    <p style="text-align:center; ">Please fill in this form to create a new job post.</p>
    <hr><br>
    {{csrf_field()}}
    <label for="companyName"><b>Company Name</b></label>
    <input type="text" placeholder="Eg. Facebook, Inc" name="companyName" required>

    <label for="jobTitle"><b>Job Title</b></label>
    <input type="text" placeholder="Eg. Professional Designer, IT ETC" name="jobTitle" required>

    <label for="vacancy"><b>Vacancy</b></label>
    <input type="text" placeholder="Eg. 05, 10" name="vacancy" required>

    <label for="jobType"><b>Job Type</b></label><br><br>
    <input type="radio" name="type" value="Part Time"> Part Timer<br>
	<input type="radio" name="type" value="Full Time"> Full Time<br><br>
	
	<label for="education"><b>Educational Requiremant</b></label><br><br>
    <input type="radio" name="education" value="HSC"> HSC<br>
	<input type="radio" name="education" value="BSC"> B.Sc<br>
	<input type="radio" name="education" value="BBA"> BBA<br><br>

	<label for="location"><b>Job Location</b></label><br><br>
	<select name="location">
    	<option value="Dhaka">Dhaka</option>
    	<option value="Barisal">Barisal</option>
    	<option value="Chattogram">Chattogram</option>
    	<option value="Rajshahi">Rajshahi</option>
    	<option value="Khulna">Khulna</option>
    	<option value="Sylhet">Sylhet</option>
    	<option value="Rangpur">Rangpur</option>
    	<option value="Mymensingh">Mymensingh</option>
  	</select>
  	<br><br>

  	<label for="category"><b>Job Category</b></label><br><br>
	<select name="category">
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
  	<br><br>

  	<label for="experience"><b>Excperience</b></label>
    <input type="text" placeholder="Eg. Freshers, 2 years" name="experience" required>

    <label for="salary"><b>Salary</b></label>
    <input type="text" placeholder="Eg. Negotiable" name="salary" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Eg. abc@" name="email" required><br>

    <label for="description"><b>Job Description</b></label><br>
    <textarea name="description" placeholder="Enter job description here" rows="5" cols="50"></textarea>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn"> Create Post</button>
  </div>

  
</form>
@endsection