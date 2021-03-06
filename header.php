<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        /*conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });*/
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div id="wrapper">

			<!-- container -->
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- header -->
						<header class="header clear" role="banner">

							<!-- logo -->
							<div class="logo">
								<?php
								if ( function_exists( 'the_custom_logo' ) ) {
									the_custom_logo();
								}else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
								<?php }
								?>

								</a>
							</div>
							<!-- /logo -->

							<!-- nav -->
							<nav id="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->

							<!-- Mobile navigation -->

							<div id="mobile-navigation">
								<div id="hamurger_icon">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>

								<?php html5blank_nav(); ?>
							</div>

							<!-- /Mobile navigation -->
							<div class="clearfix"></div>

							<div class="breadcrumbs">
								<?php if(function_exists('bcn_display'))
								{
									bcn_display();
								}?>
							</div>

						</header>
						<!-- /header -->

					</div>
				</div>

			</div>
			<!-- /container -->
