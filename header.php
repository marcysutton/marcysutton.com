<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	// echo $site_description;
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' // ' . sprintf( __( 'Page %s', 'msnextgen' ), max( $paged, $page ) );

	?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" /> 
		<?php $site_desc = 'Musings about code, accessibility, music, cycling and life.'; ?>
		<?php if(is_single()){ $desc = ''; } else { $desc = $site_desc;} ?>
		<meta name="description" content="<?php echo $desc; ?>" />
		<?php 
			$share_title = get_the_title() . ' | ' . 'MarcySutton.com';
		?>
		<meta property="og:title" content="<?php echo $share_title; ?>" />
		<meta property="og:description" content="<?php echo $desc; ?>" />
		<?php
			if ( has_post_thumbnail() ) {
				$thumbnail_id = get_post_thumbnail_id();
				$share_image = wp_get_attachment_url( $thumbnail_id );
			}
			else {
				$share_image = get_template_directory_uri() . '/library/images/ms-facebook-image-600.jpg';
			}
		?>
		<meta property="og:image" content="<?php echo $share_image; ?>" />
		<link rel="image_src" href="<?php echo $share_image; ?>" /> 

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php include('header-sharing.php'); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/library/js/instafeed.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<nav role="navigation" id="global-nav" tabIndex="-1">
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
		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">
					<div class="header-flex">
					<?php if( is_home() || is_front_page() ):
							$tag_name = 'h1';
						else :
							$tag_name = 'p';
						endif;
					?>
						<a class="site-logo" href="<?php echo home_url(); ?>" rel="nofollow" tabIndex="1">
							<<?php echo $tag_name; ?> class="site-logo-type h1">
								<span>Marcy</span> <span>Sutton.com</span>
							</<?php echo $tag_name; ?>>
							<p class="site-tagline"><?php bloginfo('description'); ?></p>
						</a>
						
						<button id="global-menu" aria-controls="global-nav" tabIndex="2"><span class="offscreen">Menu</span></button>
					</div>
				</div>
			</header>
