<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/nike-logo.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
			});
		</script>
		 <script src="https://kit.fontawesome.com/92ab37b888.js" crossorigin="anonymous"></script>
	</head>
	<body <?php body_class(); ?>>
	<section class="">	


	<nav class="navbar navbar-expand-lg navbar-light bg-light topnav">
  
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item">
        			<a class="nav-link border-right" href="#">
						NikePlus
						<span class="sr-only">
							(current)
						</span>
					</a>
     			</li>
      			<li class="nav-item">
        			<a class="nav-link border-right" href="#">
						Jordan
					</a>
     	 		</li>
      			<li class="nav-item">
        			<a class="nav-link border-right" href="#">
						Hurley
					</a>
      			</li>
      			<li class="nav-item" id="converse">
       				 <a class="nav-link border-right" href="#">
							Converse
					</a>
      			</li>
      
      		<ul class="navbar-nav d-flex justify-content-end">
      			<li class="nav-item nav-right">
					<a href="#" class="nav-link">
			  			<span id="login">
				  		Join/Login To Account
			  			</span>
					</a>
      			</li>
     	<div class="dropdown"> 
			<a class="nav-link" href="#" id="help">
				Help
			</a>
				<div class="dropdown-content">
					<a href="#">Order Status</a>
					<a href="#">Shipping and Delivery</a>
					<a href="#">Returns</a>
					<a href="#">Contact Us</a>
					<a href="#">Privacy Policy</a>
					<a href="#">Terms & Conditions</a>
					<a href="#">Site Feedback</a>
					<a href="#">View All</a>
				</div>
		</div>
       			<li class="nav-item nav-right">
		   			<a href="#" class="nav-link">
			   			<i class="fas fa-shopping-cart">
			   			</i>
					</a>
      			</li>
      			<li class="nav-item nav-right">
		  			<a href="#" class="nav-link">
		  				<span id="USA">
				  			<i class="fas fa-map-marker-alt">
							</i>
							  United States
		  				</span>
					</a>
      			</li>
      		</ul>
  
   		 </ul>
  </div>

  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

	<!-- BOTTOM NAV -->
<nav class="navbar navbar-light bottom-nav">
  <a class="navbar-brand">
	  <img src="<?php echo get_template_directory_uri(); ?>/img/nike-logo2.png" id="nike" alt="">
	</a>
  <div class="nav navbar center">
	  <ul class="nav navbar center bn-items">
		  <div class="dropdown2">
			<li>
				<a href="#">NEW RELEASES</a>
			</li>
			  	<div class="dropdown-content2" id="newrel">
					  <a href="#">SHOP ALL NEW ARRIVALS</a>
					  <a href="#">SNKRS LAUNCH CALENDAR</a>
					  <a href="#">AIR FORCE 1</a>
					  <a href="#">BEST OF AIR MAX</a>
					  <a href="#">BEST SELLERS</a>
					  <a href="#">NIKELAB</a>
					  <a href="#">MEMBER EXCLUSIVES</a>
					  <a href="#">NEW TO SALE</a>
					<div class="newmen">
						  <a href="#" class="titleitem">NEW FOR MEN</a>
						  <a href="#">Shoes</a>
						  <a href="#">Clothing</a>
						  <a href="#">Equipment</a>
						  <a href="#">Shop All New</a>
					</div>
					<!-- <div class="newwomen">
						<a href="#">NEW FOR WOMEN</a>
						<a href="#">Shoes</a>
						<a href="#">Clothing</a>
						<a href="#">Shop All New</a>
					</div> -->
				</div>
			</div>


		  <li><a href="#">MEN</a></li>
		  <li><a href="#">WOMEN</a></li>
		  <li><a href="#">KIDS</a></li>
		  <li><a href="#">CUSTOMIZE</a></li>
	  </ul>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2 searchbar d-none d-sm-block" type="search" placeholder="Search" aria-label="Search">
  </form>
</nav>
			<!-- header -->

			</header>
			<!-- /header -->
