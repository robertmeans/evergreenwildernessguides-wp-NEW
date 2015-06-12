<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ewg
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'evergreenwildernessguides' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="rapelling-logo">
			<img class="rapelling-logo" src="http://www.evergreenwildernessguides.com/wp-build/wp-content/themes/ewg/images/rapelling-logo.png">
		</div>
		<div class="slider-sm-screen">
		<?php 
		    echo do_shortcode("[metaslider id=141]"); 
		?> <!-- flexslider -->
		</div>

		<div class="nav-bkg">
			<nav id="site-navigation" class="main-navigation nav-bkg" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i> <?php esc_html_e( 'Menu', 'evergreenwildernessguides' ); ?></button>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<div class="search-toggle">
					<i class="fa fa-search"></i>
					<a href="#search-container" class="screen-reader-text"><?php _e( 'search', 'evergreenwildernessguides' ); ?></a>
				</div>
				<?php evergreenwildernessguides_social_menu(); ?>

			</nav><!-- #site-navigation -->
		</div><!-- .nav-bkg -->

		<div id="search-container" class="search-box-wrapper clear">
			<div class="search-box clear">
				<?php get_search_form(); ?>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
