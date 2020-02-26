<?php 
session()->put('data','');
 ?>
<html>
	<head>
		<title>FindJobs.com.bd</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/home_style.css')}}">
	</head>
	<body>
	<header style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url({{asset('images/images.jpg')}});">
		<div class="style">
			<div class="logo">
				<img src="{{asset('images/capture.JPG')}}">
			</div>
			<ul>
				<li><a href="/">Homepage</a></li>
				<li><a href="#">Sign in or Create</a>
					<div class="logIn_Dropdown">
						<ul>
							<li><a href="#">Candidates</a>
								<div class="sub-menu">
									<ul>
										<li><a href="/candidateLogin">Log In</a></li>
										<li><a href="/candidateRegistration">Create</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Employers</a>
								<div class="sub-menu">
									<ul>
										<li><a href="/employerLogin">Log In</a></li>
										<li><a href="/employerRegistration">Create</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Admin</a>
								<div class="sub-menu">
									<ul>
										<li><a href="/adminLogin">Log In</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="/us">Contact Us</a></li>
			</ul>
		</div>
		<div class="text">
			<h1>Choice.Apply.Join</h1>
			<h1>Build your career</h1>
		</div>
	</header>
	@yield('body')
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