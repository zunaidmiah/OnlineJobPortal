@extends('layout.registration_style')
@section('body')
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

			<div class="container">
            	<form method="post" action="employee_register" class="form-horizontal" role="form">
                	<h2>Registration</h2>
                    <br><br>
                    {{csrf_field()}}
                	<div class="form-group">
                    	<label for="firstName" class="col-sm-3 control-label">First Name</label>
                    	<div class="col-sm-9">
                        	<input type="text" id="firstName" placeholder="First Name" class="form-control" name="firstName" autofocus>
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    	<div class="col-sm-9">
                        	<input type="text" id="lastName" placeholder="Last Name" class="form-control" name="lastName" autofocus>
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="userName" class="col-sm-3 control-label">User Name</label>
                    	<div class="col-sm-9">
                        	<input type="text" id="userName" placeholder="Choose User Name" class="form-control" name="userName" autofocus>
                            
                    	</div>
                	</div>
               		<div class="form-group">
                    	<label for="email" class="col-sm-3 control-label">Email* </label>
                    	<div class="col-sm-9">
                        	<input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                            <span class="help-block">Your email must be unique from other </span>
                    	</div>
                	</div>

                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Your Picture* </label>
                        <div class="col-sm-9">
                            <input type="file" id="image" name= "image">
                        </div>
                    </div>
                	
                	<div class="form-group">
                   		<label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    	<div class="col-sm-9">
                       		<input type="date" id="birthDate" class="form-control" name="birthDate" >
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    	<div class="col-sm-9">
                        	<input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control" name="phoneNumber" >
                        	<span class="help-block">Your phone number won't be disclosed anywhere </span>
                    	</div>
                	</div>
                	
                 	<div class="form-group">
                    	<label for="companyName" class="col-sm-3 control-label">Your Company Name*</label>
                    	<div class="col-sm-9">
                       		<input type="text" id="companyName" placeholder="Your Compnay Name" class="form-control" name="companyName" >
                    	</div>
                	</div>
                	 <!-- /.form-group -->
                	<div class="form-group">
                    	<label for="password" class="col-sm-3 control-label">Password*</label>
                    	<div class="col-sm-9">
                       		<input type="password" id="password" placeholder="Password" class="form-control" name="password" >
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    	<div class="col-sm-9">
                        	<input type="password" id="password" placeholder="Retype Your Password" class="form-control">
                    	</div>
                	</div>
                	<div class="form-group">
                    	<div class="col-sm-9 col-sm-offset-3">
                        	<span class="help-block">*Required fields</span>
                    	</div>
                	</div>
                	<button type="submit" class="btn btn-primary btn-block">Register</button>
            	</form> <!-- /form -->
        	</div> <!-- ./container -->
			<br>
	</div>
	@endsection