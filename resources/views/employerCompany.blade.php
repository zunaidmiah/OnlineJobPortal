@extends('layout.employee')
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
      <div class="col-sm-10"><h1 style="text-align: center;">Company Information</h1></div>
      
    </div><hr><br>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              

      <br>
               
          
          
        </div><!--/col-3-->
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form action="companyInfo" method="post">
                    {{csrf_field()}}
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Company name</h4></label>
                              <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter company name">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Company Owner name</h4></label>
                              <input type="text" class="form-control" name="owner_name" id="owner_name" placeholder="Enter company owner name">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="area" id="area" placeholder="enter company area">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter mobile number">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="companyDescription"><h4>Company description</h4></label>
                              <textarea name="message" placeholder="Enter Company Information here" rows="5" cols="30"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com">
                          </div>
                      </div>
                      
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                
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