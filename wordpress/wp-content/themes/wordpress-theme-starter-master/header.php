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
				<li id="login"><span><a href="#" id="join">Join/Log In To NikePlus Account</a></span></li>

				<li> <a href="#">Help</a></li>
				<li><i class="fas fa-shopping-cart"></i></li>
				<li><a href="#">United States</a></li>

			</ul>

		</nav>
			<!-- header -->

			</header>
			<!-- /header -->
