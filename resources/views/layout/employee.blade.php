<html>
	<head>
		<title>FindJobs.com.bd</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	 	<meta name="description" content="">
  		<meta name="author" content="">
  		<!-- Custom fonts for this template-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/employer_home_style.css')}}">
  		<link href="{{asset('css/employee_dashboard.css')}}" rel="stylesheet">

	</head>
	<body>
	<header style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url({{asset('images/images.jpg')}});">
		<div class="style">
			<div class="logo">
				<img src="{{asset('images/capture.JPG')}}">
			</div>
			
		</div>
		<div class="text">
			<h1>Choice.Apply.Join</h1>
			<h1>Build your career</h1>
		</div>
	</header>
	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employerHome">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Homepage</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employerInfo">
        <i class="fa fa-user-secret" aria-hidden="true"></i>
          <span>Personal Information</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/new_job_post">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <span>New Job Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/all_job">
          <i class="fa fa-info-circle" aria-hidden="true"></i>
          <span>Your Pending Post</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/employee_job">
          <i class="fa fa-table" aria-hidden="true"></i>
          <span>Your Live Job Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/see_job_candidate">
          <i class="fa fa-table" aria-hidden="true"></i>
          <span>See Who Applied</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span>Log Out</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Your Total pending jobs!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="all_job">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Your All Live jobs!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="employee_job">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">1m+ Company Here!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">10m+ Candidates Here</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> 
    
	@yield('body')
</div>
</div>
</div>
</body>

	<footer class="footer">
			<a href="/us">About Us</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="/us">Contact Us</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://www.facebook.com/mdjonaeid.hossain.7"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://www.linkedin.com/in/md-jonaeid-hossain-140a41161/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope" aria-hidden="true"></i></a>
		</footer>
	</body>
<html>