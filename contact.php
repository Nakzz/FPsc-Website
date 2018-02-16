<!-- All the stylesheet elements -->
<?php include 'includes/header.php';
require_once('counter/conn.php');
require_once('counter/counter.php');

updateCounter("page name"); // Updates page hits
updateInfo(); // Updates hit info
?>
<!--  END-->

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Slander - Responsive HTML5 Landing Page">

    <title>Contact Us</title>


</head>
<body id="page-top">

<!-- Outer-wrap -->
<div class="outer-wrap">
	<div class="container">

		<!-- Fixed Left Navigaton -->
		<?php include 'includes/vertical_navbar.php'; ?>
		<!-- Fixed Left Navigaton END-->

		<!-- Right Main Content -->
		<div class="col-md-9 m-right">



			<!-- Contact Content -->
			<div class="row">
				<div class="col-md-12">
					<div id="contact-form" >
						<div class="row">

							<!-- Google Map -->
							<div class="col-md-6" data-animated="0">
								<div class="map">
									<div class="gmap">
										<div id="map"></div>
									</div>
								</div>
							</div>

							<!-- Contact Form -->
							<div class="col-md-6" data-animated="0">
								<h3>Send us a message</h3>

								<form class="contact-form" data-animated="0" id="contactForm" action="php/mailer.php" method="post">
									<div class="mc-name">
										<input type="text" name="senderName" id="senderName" placeholder="name" Required>
										<span><i class="fa fa-user"></i></span>
									</div>
									<div class="mc-email">
										<input type="email" name="senderEmail" id="senderEmail" placeholder="Email Address" Required>
										<span><i class="fa fa-envelope-o"></i></span>
									</div>
									<div class="mc-website">
										<input type="text" name="subject" id="subject" placeholder="subject">
										<span><i class="fa fa-link"></i></span>
									</div>
									<div class="mc-message">
										<textarea name="message" id="message" placeholder="Message" Required></textarea>
										<button type="submit"><span>Send</span></button>
									</div>
								</form>
								<div id="successMessage" class="successmessage">
									<p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p>
								</div>
								<div id="failureMessage" class="errormessage">
									<p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
								</div>
								<div id="incompleteMessage" class="statusMessage">
									<p>Please complete all the fields in the form before sending.</p>
								</div>

							</div>
						</div>

						<!-- Contact Info -->
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-12 cf-info" data-animated="0">
									<h3>Contact Info</h3>
									<ul>
										<li>
											<span><i class="fa fa-home"></i></span>
											<h5>207 Bio-Chemistry <br>420 Henry Mall
Madison, WI 53706 </h5>
										</li>
										<li>
											<span><i class="fa fa-phone"></i></span>
											<h5>+1 (608) 262 4640</h5>
										</li>
										<li>
											<span><i class="fa fa-envelope"></i></span>
											<h5>swoody@wisc.edu</h5>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Contact Content -->



			<!-- Footer - copyright
			Script and footer -->
		<?php include 'includes/footer.php'; ?>
		<!--  Script and footer END-->
		</div>
		<!-- Right Main Content - END -->
	</div>
</div>
<!-- Outer-wrap - END -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/easytabs/easyResponsiveTabs.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/flex-slider/jquery.flexslider.js"></script>
<script src="js/jCProgress-1.0.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.prettyphoto.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/contact.js"></script>
<script src="js/main.js"></script>
</body>
</html>
