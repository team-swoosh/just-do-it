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
	<section>	
		<nav class="navbar navbar-expand-md topnav">
			<div class="w-100">
				<ul class="navbar-nav mr-auto">
					<li class="border-right"><a href="#">Nike Plus</a></li>
					<li class="border-right">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/jordan-symbol.png" id="jordan" alt="jordan logo"></a>
					</li>
					<li class="border-right">
						<a href="#">Hurley</a>
					</li>
					<li class="border-right">
						<a href="#">Converse</a>
					</li>
				</ul>
			</div>
			<ul class="navbar-nav ml-auto topnav-right">
				<li>
					<span id="login">
						<a href="#" class="hover-color-black">Join/Log In To NikePlus Account	
						</a>
					</span>
				</li>
				<!-- dropdown -->
				<div class="dropdown"> 
					<a href="#" id="help">Help</a>
						<div class="dropdown-content">
							<a href="#">Order Status</a>
							<a href="#">Shipping and Delivery</a>
							<a href="#">Returns</a>
							<a href="">Contact Us</a>
							<a href="">Privacy Policy</a>
							<a href="">Terms & Conditions</a>
							<a href="">Site Feedback</a>
							<a href="">View All</a>
						</div>
				</div>
				<li>
					<a href="#">
						<i class="fas fa-shopping-cart"></i>
					</a>
				</li>
				<li>
					<span id="USA">
						<a href="#">
						<i class="fas fa-map-marker-alt"></i>
							United States
						</a>
					</span>
				</li>

			</ul>
		</nav>
	<!-- BOTTOM NAV -->
<nav class="navbar navbar-light bottom-nav">
  <a class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/nike-logo2.png" id="nike" alt=""></a>
			<div>
				
			</div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  </form>
</nav>
			<!-- header -->

			</header>
			<!-- /header -->
