




<!DOCTYPE html>
<html>
<head>
<title>DIU Healthline</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/e9a2714ba8.js" crossorigin="anonymous"></script>
</head>
<body>



	<div class="homepage-navbar "  >
		<div class="container">
			<div class="row">
				<div class="col-lg-3 ">
					<div class="logo">
						<a href="{{URL('dashboard')}}"><img src="image/diu.png"></a>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="home-menu-item">
						<!-- <a href="{{URL('index')}}">Home</a> -->
						<!-- <a href="{{ route('login') }}">Login</a>
						<a href="{{URL('register')}}">Register</a> -->

                        <div class="col-md-2 logout">
            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                </div>

						@if (Route::has('login'))
                          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
                
            @endif
					</div>
				</div>
			</div>


            





		</div>
	</div>




	<div class="homepage-midle">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home-mid-upper">
						<h1>DIU HEALTHLINE </h1>
					</div>
					<div class="home-mid-upper">
						<h3>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </h3>
					</div>
					<div class="home-mid-upper">
						<div class="row">
							<div class="home-middle-login col-sm-3"> 
							 <h5>LOG IN</h5>
						</div>
						<div class="home-middle-register col-sm-3"> 
							 <h5>REGISTER</h5>
						</div>
						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="homepage-middle-img">
						<img class="imagecss" src="image/homeimg.gif">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="content-middle">
		<div class="container">
			<div class="row">
				 <div class="col-lg-12">
				 	<div class="content-amar">
				 		<div class="row">
				 			<div class="col-lg-12 content-amar-middle">
				 				<h2 class="content-capital">Lorem ipsum or lipsum</h2>
				 			</div>
				 		</div>
				 		<div class="row">
				 			<div class="col-lg-12">
				 				<h4 class="content-samll">
									Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. 
									The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</h4>
				 			</div>
				 		</div>
				 	</div>
				 </div>
			</div>
		</div>
	</div>


	<div class="member">
		<div class="container">
			<div class="row ">
				<div class="col-lg-4 saju ">
					<div class="card bg-light" >
						<img class="imgcon"  src="image/logo.jpg">
						<div class="card-body">
							<h5>AKM SAJJAD</h5>
							<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is though</p>
							<a href="#" class="btn btn-primary">MORE...</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 saju ">
					<div class="card bg-light" >
						<img class="imgcon"  src="image/logo.jpg">
						<div class="card-body">
							<h5>AKM SAJJAD</h5>
							<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is though</p>
							<a href="#" class="btn btn-primary">MORE...</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 saju ">
					<div class="card bg-light" >
						<img class="imgcon"  src="image/logo.jpg">
						<div class="card-body">
							<h5>AKM SAJJAD</h5>
							<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is though</p>
							<a href="#" class="btn btn-primary">MORE...</a>
						</div>
					</div>
				</div>
		</div>
	</div>




	<div class="home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 home-footer-text ">
					<h4 class="text-head">Lorem ipsum, or lipsum</h4>
					<h6 class="text-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is though</h6>
				</div>
				<div class="col-lg-6">
					<img src="image/banner.jpg">
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