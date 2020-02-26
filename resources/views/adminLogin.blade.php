@extends('layout.login_layout')
@section('body')
	<div id="logreg-forms">
        <form class="form-signin" action="admin_login" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" name="userName" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            
        </form>
        <br>
	</div>
	    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEJQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection