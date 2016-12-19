
<?php

/* These are the variable that tell the subject of the email and where the email will be sent.*/

$emailSubject = 'Limocan Form Order!';
$mailto = 'rickgoraya@hotmail.com';

/* These will gather what the user has typed into the fieled. */

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address = $_POST['address'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Address $address <br>
EOD;

$headers = "From: $email\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.

?>
<!DOCTYPE html>
<html lang="en">
	

<head>

	
		<meta charset="utf-8">
		<title>Canaccord Limos</title>
		<meta name="description" content="Attraction is a multipurpose one/multi page HTML template.">
		<meta name="author" content="Your Name Here">

		<!-- ==============================================
		Mobile Metas
		=============================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- ==============================================
		CSS
		=============================================== -->
		<link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- Twitter Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" /> <!-- Twitter Bootstrap Responsive -->
		<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome -->
		<link rel="stylesheet" href="css/flexslider.css"> <!-- Flexslider -->
		<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css"/> <!-- Fancybox -->
		<link rel="stylesheet" href="css/style.css"> <!-- Main stylesheet -->
		<link rel="stylesheet" href="css/style-responsive.css"> <!-- Main stylesheet responsive -->

		<!--[if IE 7]>
			<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='http://fonts.googleapis.com/css?family=Lato|Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<!-- ==============================================
		JS
		=============================================== -->
		<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jQuery main file -->
		<script type="text/javascript" src="js/jquery.flexslider.min.js"></script> <!-- Flexslider -->
		<script type="text/javascript" src="js/jquery.easing.pack.js"></script> <!-- Easing for Fancybox -->
		<script type="text/javascript" src="js/jquery.mousewheel.pack.js"></script> <!-- Mousewheel for Fancybox -->
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
		<script type="text/javascript" src="js/attraction.js"></script> <!-- Custom JS -->

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
a:link {
	color: #FFFFFF;
}
-->
    </style></head>
	<body id="top" class="fixed-nav">

		<!-- ==============================================
		Header
		=============================================== -->
		<section class="header">
			<div class="container">
				<div class="row">
					<div class="span12">

						<!-- ==============================================
						Logo
						=============================================== -->
						<div class="logo float-left">
							<a href="#top">
								<h1>Canaccord<span>Limousines</span></h1>
							</a>
						</div>
						<!-- End Logo 
						=============================================== -->

						<!-- ==============================================
						Navigation
						=============================================== -->
						<ul class="nav hidden-phone hidden-tablet">
							<li><a href="#top">Home</a></li>
							<li><a href="#features">Services</a></li>
							<li><a href="#Rates">Rates</a></li>
							<li><a href="#testimonials">Testimonials</a></li>
						</ul>
						<!-- End Navigation 
						=============================================== -->

						<!-- ==============================================
						Mobile Navigation
						=============================================== -->
						<form name="nav" class="float-right">
				         	<select class="mobile-nav hidden-desktop" data-autogenerate="true"></select>
				        </form>
				        <!-- End Mobile Navigation 
						=============================================== -->

					</div>
				</div>
			</div>
		</section>
		<!-- End Header 
		=============================================== -->

		<!-- ==============================================
		Teaser
		=============================================== -->
		<section class="teaser">
			<div class="container">
				<div class="row">

					<!-- ==============================================
					Slider
					=============================================== -->
					<div class="span7 offset5">
                  
						<div class="flexslider">
                        <ul class="slides">
							    <li>
							      	<img src="images/teaser-image-1.jpg" alt=""/>
							    </li>
							    <li>
							      	<img src="images/teaser-image-2.jpg" alt=""/>
							    </li>
							    <li>
							      	<img src="images/teaser-image-3.jpg" alt=""/>
							    </li>
						  	</ul>
<b>						 	
                            
                       
</b>
                            
						</div>
					</div>
					<!-- End Slider
					=============================================== -->

				</div>
			</div>
		</section>
		<!-- End Teaser 
		============================================== -->

		<!-- ==============================================
		Intro
		=============================================== -->
		<section class="intro white-background">
			<div class="container">
				<div class="row">

					<!-- ==============================================
					Featured Box
					=============================================== -->
					<div class="span4 featured">	
						<h2 class="feature-title"><a href="tel:6047732726">Call&nbsp;(604) 773-2726</a></h2>
                        <h2 class="feature-title">or contact us  </h2>
						<form action="">
							<p>we will call you back with in next couple of hours!</p>
					    <input type="text" value="Insert your name" name="name">
							<input type="email" value="Insert your e-mail" name="email">
							<input type="tel" value="Insert your phone number" name="phone">
							<input type="text" value="Insert your address" name="address">
							
							<input type="submit" name="Book now " value="Contact me ">
						</form>
					</div>
					<!-- End Featured Box
					=============================================== -->

					<div class="span7 offset1">
						<h2 class="padding-top">Thanks for Contacting us :<?php  echo $name  ?> 
                            We will get back to you at the Phone # <?php  echo $phone ?></h2>
						<p>Vancouver-based Canaccord Limo Services provides the highest quality limousine service in Vancouver and neighboring cities. We are committed to providing the best limo services Vancouver has to offer. Along with class and distinction, our limousines are of the best quality. We pride ourselves in being a professional and respected limo rental company in Vancouver.</p>
				  </div>
				</div>
			</div>
		</section>
		<!-- End Intro 
		============================================== -->

		<!-- ==============================================
		Features
		=============================================== -->
		<section class="features light-gray-background" id="features">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2 class="no-margin-bottom">Limo Services</h2>
						<h4>Our pledge to you is to treat you as a VIP customer and to provide you with more than professional limousine transportation with a trusted chauffeur.</h4>
				  </div>
				</div>
				<div class="row">

					<!-- ==============================================
					First Feature
					=============================================== -->
					<div class="span6">
						<div class="icon-container float-left">
							<img src="images/wedding.png" alt="">						</div>
					  <p><strong>Wedding Limos </strong><br/>
                        Wedding Limo is our speciality. we provide it with five-star class. Our SUV limo has a State-of-the-art fibre optic lighting and an entertainment system, Wedding glasses, wedding napkins, and ice supplied, anything else should be supplied upon request..</p>
				  </div>
					<!-- End First Feature 
					============================================== -->

					<!-- ==============================================
					Second Feature
					=============================================== -->
					<div class="span6">
						<div class="icon-container float-left">
							<img src="images/concert.png" alt="">						</div>
					  <p><strong>Sports and Concert Events</strong>                        <br/>
                        With a Limo service that will allow you to arrive in style and luxury in the comfort of a professionally chauffeur driven limousine.You and your friends can all travel together, no one has to be the designated driver, no parking issues and you get home safe!</p>
				  </div>
					<!-- End Second Feature 
					============================================== -->

				</div>
				<div class="row">

					<!-- ==============================================
					Third Feature
					=============================================== -->
					<div class="span6">
						<div class="icon-container float-left"><img src="images/nightlife.png" alt=""></div>
					  <p><strong>Night out in Town</strong><br/>
                        We will provide local pick-ups and drop-offs to and from restaurants, bars, Vancouver night clubs, or to suit your every need.</p>
				  </div>
					<!-- End Third Feature 
					============================================== -->

					<!-- ==============================================
					Fourth Feature
					=============================================== -->
					<div class="span6">
						<div class="icon-container float-left">
							<img src="images/airport.png" alt="">
						</div>
						<p><strong>Airport Transfers                        </strong><br/>
                        We  will provide on-time pick up and drop offs to ensure a hassle-free ride to airport. Your chauffeur will be happy to meet you at the carousel of your flight inside baggage claim with a name sign with your last name on it.
						</p>
				  </div>
					<!-- End Fourth Feature 
					============================================== -->

				</div>
			</div>
		</section>
		<!-- End Features 
		============================================== -->

		<!-- ==============================================
		Hero Section
		=============================================== -->
		<section class="color-background hero-section">
			<div class="container">
				<div class="row">
					<div class="span9">
						<h2 class="no-margin-bottom">Call now and we will give you a complementary (promotion)!</h2>
					</div>
					<div class="span3">
                    
						<a href="tel:6047732726" class="button-dark">(604) 773-2726</a>
                        
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Hero Section 
		============================================== -->

		

		<!-- ==============================================
		Plans
		=============================================== -->
		<section class="white-background plans" id="Rates">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2 class="no-margin-bottom">Check out our Limousine Rates </h2>
						<h4>Find the right price for you.</h4>
					</div>
				</div>
               <p>Standard Hourly Service Rates:<br/>
Vehicle Pass Pass w/luggage Child seat Rate Minimum<br/>
Luxury Sedan 4 3 Yes $75<br/>
Stretch Limousine 6 6 Yes $85<br/>
SUV 7 6 Yes $85<br/>
Van 9 9 Yes $80<br/>
Super Stretch Limousine 8 7 Yes $110<br/>
Stretch SUV 12 10 Yes $150<br/>

For Airport Pickups:<br/>
* Sedan, limousine, SUV, van, stretch SUV additional $8.00 parking<br/>
* Stretch SUV additional $15.00 parking<br/>
* Additional $15.00 for Meet and Greet<br/>
All Vehicles are Non Smoking.</p>
				<div class="row">
					<!-- ==============================================
					Info Column
					=============================================== -->
					
					<div class="span3">
					  <div class="plan-row">
							<span class="hidden-info">Support 24/7</span>
							
						</div>
						<div class="plan-row button-row">
							<a href="tel:6047732726"> (604) 773-2726</a>
						</div>
					</div>
					<!-- End Third Plan
					============================================== -->

				</div>
			</div>
		</section>
		<!-- End Plans
		============================================== -->

		<!-- ==============================================
		Testimonials
		=============================================== -->
		<section class="testimonials gray-background" id="testimonials">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2 class="no-margin-bottom">Testimonials</h2>
						<h4>What people say about those our service.</h4>
					</div>

					<!-- ==============================================
					First Testimonial
					=============================================== -->
					<div class="span4">
						<div class="bubble">
							Most usually cotton is employed, with varying levels of ply, with the lower numbers meaning finer quality.
						</div>
						<div class="person">
							<img src="images/testimonials-1.jpg" alt="" class="float-left">
							<h3 class="no-margin-bottom">Jim Blancho</h3>
							<h4>Musician</h4>
						</div>
					</div>
					<!-- End First Testimonial
					============================================== -->

					<!-- ==============================================
					Second Testimonial
					=============================================== -->
					<div class="span4">
						<div class="bubble">
							The new technology of the printing cosmic press was widely used to publish many arguments.
						</div>
						<div class="person">
							<img src="images/testimonials-2.jpg" alt="" class="float-left">
							<h3 class="no-margin-bottom">Greta McNoil</h3>
							<h4>Designer</h4>
						</div>
					</div>
					<!-- End Second Testimonial
					============================================== -->

					<!-- ==============================================
					Third Testimonial
					=============================================== -->
					<div class="span4">
						<div class="bubble">
							The mass media face a number of pressures that can prevent them from accurately depicting scientific claims.
						</div>
						<div class="person">
							<img src="images/testimonials-3.jpg" alt="" class="float-left">
							<h3 class="no-margin-bottom">Tom Simpson</h3>
							<h4>Developer</h4>
						</div>
					</div>
					<!-- End Third Testimonial
					============================================== -->

				</div>
			</div>
		</div>
		<!-- End Testimonials
		============================================== -->

		<!-- ==============================================
		Footer
		=============================================== -->
		<section class="footer dark-gray-background">
			<div class="container">
				<div class="row">
					<div class="span6">
						<p class="no-margin-bottom">Canaccord Limousines.<br>
						750 east 31 ave<br>
						vancouver B.C. <br>
						<a href="mailto:info@limocan.com">info@limocan.com</a></p>			
					</div>
					<!-- ==============================================
					Social
					=============================================== -->
					<div class="span6">
						<ul class="social float-right">
							
							<li><a href="https://www.facebook.com/limocan1"><i class="icon-facebook"></i></a></li>
						</ul>
						<p class="no-margin-bottom float-right copyright">Copyright &copy; 2013 <a href="#">Canaccord Limousines</a>. All rights reserved</p>
					</div>
					<!-- End Social
					============================================== -->
				</div>
			</div>
		</div>
		<!-- End Footer
		============================================== -->

	</body>

</html>