<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nepalese Food Recipe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Home</a>  
                    <?php
                        //Crost site script check
                        echo 'Hi, '.  htmlspecialchars($_SESSION['uname'], ENT_QUOTES, 'UTF-8');
                        ?>
                    </div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="#">Selections</a>
							<ul class="dropdown">
                                <?php
                                if($_SESSION('uname') == ""){
                                    <li><a href="index.php">Login First</a></li>
                                }
                                else{
                                    <li><a href="breakfast.php">breakfast</a></li>
                                }
                                ?>
								
								<li><a href="lunch.php">Lunch</a></li>
								<li><a href="dinner.php">Dinner</a></li>
							</ul>
						</li>
						<li><a href="feedback.php">Feedback</a></li>
						<li class="btn-cta"><a href="#redirectthis"><span>Sign up</span></a></li>
					</ul>	
				</div>
			</div>
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(aluchana.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Authentic Nepalese Cuisine</span>
							<h1 class="cursive-font">Prepare at your own home</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Have an account? Log in</h3>
											<form action="trylogging.php" accept-charset="ISO-8859-1" method = "get">
												<?php if (isset($_SESSION['errors'])): ?>
                                                <div class="form-errors">
                                                    <?php foreach($_SESSION['errors'] as $error): ?>
                                                    <p><?php echo $error ?></p>
                                                    <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Username</label>
														<input type="text" id="uname" name="uname" placeholder="Enter Username" required class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Password</label>
														<input type="password" id="password" name="password" placeholder="Enter Password" required class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Log in">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Authentic Nepalese Cuisine</h2>
					<p>Prepare authentic Nepalese cuisine at home whenever you desire.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="aluchana.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="aluchana.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Aloo Chana</h2>
							<p> potato and chickpeas</p>
							<p><span class="price cursive-font">BreakFast</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="parotha.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="parotha.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Parotha</h2>
							<p>Special tortilla with potatoes in it</p>
							<p><span class="price cursive-font">Lunch</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="roticauli.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="roticauli.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Roti Cauli</h2>
							<p>Nepalese style tortilla with cauliflower</p>
							<p><span class="price cursive-font">Dinner</span></p>

						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="snack4.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="snack4.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Aloo Chat</h2>
							<p>Perfect combination of potato, chutney, spices and yogurt</p>
							<p><span class="price cursive-font">Lunch</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="dinner4.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="dinner4.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Biryani</h2>
							<p>One of the best chicken and rice dinner you can ever prepare</p>
							<p><span class="price cursive-font">Dinner</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="masalachai.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="masalachai.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Masala Chai</h2>
							<p>Nothing like taking a sip of this wonderful chai early morning</p>
							<p><span class="price cursive-font">Breakfast</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Get Cooking</h2>
					<p>Sign up and login for free to get access to my recipes and make your own Nepalese food at home.</p>
				</div>
			</div>
			
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Wonderful food that are only of beginner to intermediate difficulties. </h1>
					
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">Reasonable Prices</h2>
					<p>All recipes included here are pretty cheap to cook. The ingredients are easily affordable and easily available. With the recipe, I also included links to the ingredients with which you can buy all you need to prepare that food with one single click.</p>
				</div>
			</div>

			
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			
			<<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Create an account</h3>
											<form id = "redirectthis" action="Registration.php" method="get" accept-charset="ISO-8859-1">
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Username</label>
														<input  type="text" id="uname" name="uname" placeholder="Enter Username" required class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Password</label>
														<input type="password" id="password" name="password" placeholder="Enter Password" required class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Sign Up">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>My Contact Information</h3>
						<ul class="gtco-quick-contact">
							<li><i class="icon-phone"></i> +507-351-5303</li>
							<li><i class="icon-mail2"></i> prsnt.rizal@gmail.com</li>
						</ul>
					</div>
					
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; Prashant Rizal</small> 
						</p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

