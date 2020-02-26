@extends('layout/candidate')
@section('body')
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/job_post.css')}}">
	<form action="/createCV" method="post">
  	<div class="container">
    <h1 style="text-align:center; color:rgba(255, 99, 71, 0.6); ">Create Your CV Here</h1>
    <p style="text-align:center; ">Please fill in this form to create a new job post.</p>
    <hr><br>
    {{csrf_field()}}
    <label for="companyName"><b>Your Name*</b></label>
    <input type="text" placeholder="Eg. john doe, Inc" name="name" required>

    <label for="jobTitle"><b>Phone Number*</b></label>
    <input type="text" placeholder="Eg. 012345667" name="phone" required>

    <label for="vacancy"><b>Social Site Link*</b></label>
    <input type="text" placeholder="Eg.www.facebook.com/abc" name="socialLink" required>

    <label for="jobType"><b>Working Company Name</b></label>
    <input type="text" name="companyName" placeholder="Eg. abc It">
	
	<label for="education"><b>Working Duartion</b></label><br><br>
    <input type="text" name="experience" placeholder="Eg.2017-2019">

	<label for="location"><b>Education Institution Name*</b></label><br><br>
	<input type="text" name="institution" placeholder="Institution Name">

  	<label for="category"><b>Education Background*</b></label>
	<input type="text" name="department" placeholder="eg. s.s.c, h.s.c,b.sc etc">

  	<label for="experience"><b>Your Skills*</b></label>
    <input type="text" placeholder="Eg. IT,Law Legal, Enginnering" name="skill1" required>
    <input type="text" placeholder="Eg. IT,Law Legal, Enginnering" name="skill2">
    <input type="text" placeholder="Eg. IT,Law Legal, Enginnering" name="skill3">

    <label for="salary"><b>Father Name*</b></label>
    <input type="text" placeholder="Eg. abc" name="fatherName" required>

    <label for="email"><b>Date Of Birth*</b></label><br>
    <input type="date"  name="date" required><br><br>

    <label for="email"><b>Your Address*</b></label>
    <input type="text"  name="city" placeholder="address here" required><br>

    <label for="description"><b>Career Description*</b></label><br>
    <textarea name="description" placeholder="Enter job description here" rows="5" cols="50"></textarea>

    <hr>

    
    <button type="submit" class="registerbtn"> Create CV</button>
  </div>

  
</form>
@endsection