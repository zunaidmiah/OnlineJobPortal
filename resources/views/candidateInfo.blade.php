
<?php 

if (session()->get('data')==null) {
  return view('employerLogin');
  # code...
}
 ?>
 @extends('layout.candidate')

@section('body')


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{asset('javascript/employeeInfo.js')}}"></script>


<hr>
<div class="container bootstrap snippet" >
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	
    </div>
    <div class="row">
  		
         <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img height="300px" width="200px" src="{{asset('images/employer.JPG')}}" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->     

    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/updateCandidate" method="post">
                    @foreach($userInfo as $value)
                    @csrf
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder={{ $value->firstName }}>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder={{ $value->lastName }} title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>User Name</h4></label>
                              <input type="text" class="form-control" name="user_name" id="user_name" placeholder={{ $value->userName }}>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="mobile" placeholder={{ $value->email }}>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="DOB"><h4>Date Of Birth</h4></label>
                              <input type="text" class="form-control" name="DOB" id="DOB" placeholder={{ $value->DOB }} >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="phone" class="form-control" id="phone" placeholder={{ $value->phone }}>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="company name"><h4>Educational Degree</h4></label>
                              <input type="text" class="form-control" name="degree" id="degree" placeholder={{ $value->degree }}>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="company name"><h4>Skill</h4></label>
                              <input type="text" class="form-control" name="skill" id="skill" placeholder={{ $value->skill }}>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="company name"><h4>Your City</h4></label>
                              <input type="text" class="form-control" name="city" id="city" placeholder={{ $value->city }}>
                          </div>
                      </div>
                      @endforeach
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                            </div>
                      </div>

              	</form>

              
              <hr>
              
             
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                
@endsection