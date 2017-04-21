<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Faurefold
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'faurefold' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="top">
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<div class="site-description full-width"><?php echo $description; /* WPCS: xss ok. */ ?></div>
				<?php
				else : ?>
					<div class="site-description full-width">&nbsp;</div>
				<?php
				endif; ?>				
			</div>

			<div class="middle full-width">
				<img src=<?php echo get_stylesheet_directory_uri() . "/img/ggselogo.png"; ?>>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>				
			</div>

			<div class="bottom">
				&nbsp;				
			</div>
		</div><!-- .site-branding -->

<?php /* ?>

		<nav id="site-navigation" class="main-navigation bottom" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'faurefold' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

<?php */ ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
