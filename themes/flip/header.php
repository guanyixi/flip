<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaunch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-nav="close">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'glaunch' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container site-header-container">
			<div class="site-branding">
				<a href="<?php echo get_home_url(); ?>">
					<img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" alt="site logo">
					<img class="logo-dark" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="site logo">
				</a>
			</div><!-- .site-branding -->

			<button class="menu-toggle" data-status="close">
				<span></span>
				<span></span>
				<span></span>
            </button>

			<nav id="site-navigation" class="main-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
