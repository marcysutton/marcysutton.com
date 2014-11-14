<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" /> 
		<?php $site_desc = 'Musings about code, accessibility, music, cycling and life.'; ?>
		<?php if(is_single()){ $desc = ''; } else { $desc = $site_desc;} ?>
		<meta name="description" content="<?php echo $desc; ?>" />
		<meta property="og:title" content="MarcySutton.com" />
		<meta property="og:description" content="<?php echo $desc; ?>" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/ms-facebook-image-600.jpg" />
		<link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/library/images/ms-facebook-image-600.jpg" /> 

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php include('header-sharing.php'); ?>

	<?php /*	<script src="<?php echo get_template_directory_uri(); ?>/library/js/instafeed.min.js"></script> */ ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">
					<?php if(is_front_page()):
							$tag_name = 'h1';
						else :
							$tag_name = 'p';
						endif;
					?>
					<a class="site-logo" href="<?php echo home_url(); ?>" rel="nofollow">
						<<?php echo $tag_name; ?> class="site-logo-type h1">
							<span>Marcy</span> <span>Sutton.com</span>
						</<?php echo $tag_name; ?>>
						<p class="site-tagline"><?php bloginfo('description'); ?></p>
					</a>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => false,                           // remove nav container
    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					'theme_location' => 'main-nav',                 // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
