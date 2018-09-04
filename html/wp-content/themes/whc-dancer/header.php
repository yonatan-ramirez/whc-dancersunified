<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whc-dancerunified
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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whc' ); ?></a>

<header id="masthead" class="site-header">
	<nav class="navbar navbar-expand-lg bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	 data-target="#bs-example-navbar-collapse-1" 
	 aria-controls="bs-example-navbar-collapse-1" 
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">
		<?php
			the_custom_logo();
				?>
			</a>
	<div class="text-dark">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
<!-- <div style="background: blue;">
	<a class="btn" style="
	color: hotpink;
	background-color: white;
	border: 1px solid hotpink;
	">
	Login</a>
	<a class="btn" href="#" style="
	color: white;
	background-color: hotpink;
	border: 1px solid white;
	"> 
	Sign Up
	</a>
	</div> -->
		</div>
	</div>
	</nav>
	<!-- #site-navigation -->
</header><!-- #masthead -->
	<div id="content" class="site-content">