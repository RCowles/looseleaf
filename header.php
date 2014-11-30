<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Loose Leaf
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'looseleaf' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<?php if ( ! is_front_page() && function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'looseleaf' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .wrapper !-->
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) {?>

	<div class="frontpage-header">
		<section id="welcome" class="wrapper">
		 	<!-- Temporary until I flesh out a welcome.php !-->

			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="welcome-image">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			<?php endif; // End header image check. ?>

			<h1 class="welcome-message">
				Hello. I'm Ryan. <br>I build websites with WordPress.
			</h1>

		 </section>
	 </div><!-- .frontpage-header !-->

	<?php } ?>

	<div id="content" class="site-content">
