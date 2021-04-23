<!DOCTYPE html>
<html>
<head>
<title>DIU Healthline</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

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
	<!-- background start -->
	<div class="background-img-section" style="background-image: url('image/corona-cover.jpg') ;" >
		<div class="bg-div-text">
			<br>
			<h1> </h1>
			<h2>
				<a href="#">HELP DESK MEDICAL TEAM</a>

			</h1>
			<br>
			<br>
			<br>
			
			
		</div>
	</div>

	<br>
	<!-- background end -->

	<div class="page_body ">
		<p align="right">
			<a class="btn btn-primary"  href="index.html">Back to main page </a>
			
		</p>
		<div class="container">
			<div class="row">
			  <div class="col-md-6">


			  	<h3>
			  		For any advice regarding COVID - 19, please contact the following:
			  		<br>
			  		<br>
			  	</h3>
			  	<p >
			  		1. Professor Dr. Abu Naser Zafar Ullah, Associate Dean, Faculty of Allied Health Sciences. Phone: 01775325061 (Team Leader)<br><br>

			  	<p>

			  		2. Dr. Salamat Khandokar. Phone: 01712595502
			  		<br><br>

			  	</p>
			  	<p>
			  		3. Dr. Nadira Meherban. Phone: 01817094869
			  		<br><br>
			  		4. Dr. Md. Mushfuqul Alam. Phone: 01748529703
			  		<br><br>
			  		5. Dr. Sabbir Ahmed. Phone: 01957549829
			  		<br><br>
			  		6. Dr. Al Mamun. Phone: 01303580657
			  	</p><br>



			  	<br>
			  	</p>




			  </div>


			  <div class="col-md-6">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<form action="{{url('comment')}}" method="post">
						@csrf
			  				<label for="fname">First Name</label>
			  				<input type="text" id="fname" name="firstname" placeholder="Your name..">

			  				<label for="lname">Last Name</label>
			  				<input type="text" id="lname" name="lastname" placeholder="Your last name..">


			  				<label for="subject">Subject</label>
			  				<textarea id="subject" name="subject" placeholder="Write something.." style="height: 100px;"></textarea>

			  				<input type="submit" value="Submit">

			  				</form>
			  		</div>
			  	 
			  	</div>
			  </div>


			

			</div>
		
	    </div>
    </div>





    <div class="creator">
	<div class="container">
		<div class="col-md-4">
			<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="image/munni.jpg" alt="Avatar" style="width:300px;height:300px;">
			    </div>
			    <div class="flip-card-back">
			    	<br><br><br><br>
			    
			      <h1>Khadijatunnasha Munni</h1>
			      <p>ID:181-35-2341</p>
			      
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="image/saju.jpg" alt="Avatar" style="width:300px;height:300px;">
			    </div>
			    <div class="flip-card-back">
			    	<br><br><br><br>
			    	<br>
			      <h1>Akm Sajjad</h1>
			      <p>ID:181-35-2342</p>
			      
			    </div>
			  </div>
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="image/mahmud.jpg" alt="Avatar" style="width:300px;height:300px;">
			    </div>
			    <div class="flip-card-back">
			    	<br><br><br><br>
			    	<br>
			      <h1>Mahmul Hasan</h1>
			      <p>ID:181-35-2352</p>
			     
			    </div>
			  </div>
			</div>
			
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