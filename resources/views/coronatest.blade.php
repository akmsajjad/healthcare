<!DOCTYPE html>
<html>
<head>
	<title>DIU Healthline</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/e9a2714ba8.js" crossorigin="anonymous"></script>
</head>
<body>

		<!--menu bar start-->

	<div class="menu-bar">
		<div class="mid-menu">
			<div class="menuleft">
            <a href="{{URL('home')}}"><img src="image/n.png"></a>

			</div>

			<div class="menumiddle">

				<div class="menuitem">
					<ul>
					<li><a href="{{URL('report')}}"> Report</a></li>			
					<li><a href="{{URL('coronatest')}}"> Test Campaign</a></li>
					<li><a href="{{URL('hometreatment')}}">Treatment At Home</a></li>
					<li><a href="{{URL('medicalhelp')}}">Medical Team</a></li>
					<li><a href="{{URL('tips')}}">Tips </a></li>
					<li><a href="{{URL('home')}}"> Home</a></li>

				</ul>
				</div>

			</div>
			
		</div>
	</div>

	


	<!-- menu bar end -->

	<div class="container">
		<h1 class="text-center text-danger border ">Test Campaign </h1>
		<hr>
		<div class="corona-info">
			<div class="testcampaign">
			
			<form action="{{url('test')}}" method="post">
			@csrf
			<div class="information">
				<h3>Enter your name: </h3>
				<input type="text" name="name" placeholder="text">
			</div>
			<!-- <div class="information">
				<h3>Enter your Image: </h3>
				<input type="file" name="file" placeholder="file">
			</div> -->
			<div class="information">
				<h3>Enter your Age: </h3>
				<input type="text" name="age" placeholder="text">
			</div>
			<div class="information">
				<h3>Enter your Gender: </h3>
				<input type="text" name="gender" placeholder="text">
			</div>
			<div class="information">
				<h3>Enter your Email: </h3>
				<input type="Email" name="email" placeholder="Email">
			</div>
			<div class="information">
				<h3>Enter your Mobile No: </h3>
				<input type="text" name="mobile" placeholder="text">
			</div>
			<div class="information">
				<h3>Enter your Location: </h3>
				<input type="text" name="location" placeholder="text">
			</div>
			<!-- <div class="information">
				<h3>Describe Problems: </h3>
				<input type="text" name="text" placeholder="text">
			</div> -->
			<div class="information">
				<h3>Select your Test collect Time: </h3>
				<input type="text" name="time" placeholder="text">
				<!-- <button > Time	</button> -->
					<!-- <form>
						<?php

					// $date = array("amm", "jamm","kathal");
					// echo $date;
				?>
					</form> -->
					

			
				
			</div>
			<br/>
			<div class="information">
			<input type="submit" value="Submit">
			</div>
			</form>
			
			
		</div>
	
		<div class="corona-collect">
		
			<img src="image/collect.jpg">
		</div>
		</div>
	</div>


	<!-- footer start -->


	<div class="footer">
		<div class="container">
			<div class="row">
				 <div class="col-lg-3">
				 	<h3>Get in Touch</h3>

				 	<span> <a href="#">Campus Contact</a> </span> <br>
					<span> <a href="#">Privacy Statement</a> </span><br>
					<span> <a href="#">Report Copyright Infringement</a> </span><br>
					<span> <a href="#">Recom. For Traffic Mgtt</a> </span><br>
					<span> <a href="#">Newsletters</a> </span><br>
					<span> <a href="#">Location Map</a> </span><br>
					<span> <a href="#">Campus Contact</a> </span><br>

				 </div>

				 <div class="col-lg-3">
				 	<h3>Get in Touch</h3>

				 	<span> <a href="#">Campus Contact</a> </span> <br>
					<span> <a href="#">Privacy Statement</a> </span><br>
					<span> <a href="#">Report Copyright Infringement</a> </span><br>
					<span> <a href="#">Recom. For Traffic Mgtt</a> </span><br>
					<span> <a href="#">Newsletters</a> </span><br>
					<span> <a href="#">Location Map</a> </span><br>
					<span> <a href="#">Campus Contact</a> </span><br>

				 </div>

				 <div class="col-lg-3">
				 	<h3>Get in Touch</h3>

				 	<span> <a href="#">Campus Contact</a> </span> <br>
					<span> <a href="#">Privacy Statement</a> </span><br>
					<span> <a href="#">Report Copyright Infringement</a> </span><br>
					<span> <a href="#">Recom. For Traffic Mgtt</a> </span><br>
					<span> <a href="#">Newsletters</a> </span><br>
					<span> <a href="#">Location Map</a> </span><br>
					<span class="ion-ios-arrow-round-forward"> <a href="#">Campus Contact</a> </span><br>

				 </div>

				 <div class="col-lg-3">
				 	<h3 > <i class="fas fa-home"> </i>  Get in Touch</h3>

				 	<input type="email" name="email" class="form-control mb-2 text-center" placeholder="Enter email address">
				 	<button class="submit">SUBMIT</button>
				 	<h3>Connect With Us</h3>
				 	<span ><a href="#"><i class="fab fa-facebook"></i></a> </span>
				 	<span ><a href="#"><i class="fab fa-instagram"></i></a> </span>
				 	<span ><a href="#"><i class="fab fa-twitter"></i></a> </span>
				 	<span ><a href="#"><i class="fab fa-skype"></i></a> </span>
				 	
				 </div>
			</div>
		</div>
		<div class="footerinfo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footerinfo-text">
						<p>Copyright © 2020 Daffodil International University. All Rights Reserved.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	</div>




	


	<!-- footer end -->

</body>
</html>