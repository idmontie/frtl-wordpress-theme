<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frtl
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Stylesheets-->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300%7CMontserrat:400,700">
<!--[if lt IE 10]>
<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<script src="js/html5shiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Page-->
	<div class="page">
		<!-- Page Header-->
		<header class="page-head">
			<!-- RD Navbar-->
			<div class="rd-navbar-wrap rd-navbar-default rd-navbar-absolute">
				<nav
					data-layout="rd-navbar-fixed"
					data-sm-layout="rd-navbar-fullwidth"
					data-lg-layout="rd-navbar-static"
					class="rd-navbar"
					data-sm-stick-up-offset="1px"
					data-md-stick-up-offset="1px"
					data-lg-stick-up-offset="1px"
					data-md-layout="rd-navbar-fullwidth"
					data-md-device-layout="rd-navbar-fullwidth"
					data-lg-device-layout="rd-navbar-static"
					style="<?php if ( ! is_front_page() ) { echo 'background-color: #332f36;'; } ?>"
				>
					<div class="rd-navbar-outer">
						<div class="rd-navbar-inner">
							<!-- RD Navbar Panel-->
							<div class="rd-navbar-cell rd-navbar-panel">
								<!-- RD Navbar Toggle-->
								<button data-rd-navbar-toggle=".rd-navbar" class="rd-navbar-toggle"><span class="toggle-icon"></span></button>
								<!-- RD Navbar Brand-->
								 <a
									 class="rd-navbar-brand"
									 href='<?php echo esc_url( home_url( '/' ) ); ?>'
									 title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
									 rel='home'
								 >
									 <img
										 src='<?php echo esc_url( get_theme_mod( 'frtl_logo' ) ); ?>'
										 alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
									 />
								 </a>
							</div>
							<!-- RD Navbar Nav-->
							<?php
								$menu = wp_nav_menu(
									 array(
										 'container'       => 'div',
										 'container_class' => 'rd-navbar-cell rd-navbar-nav-wrap',
										 'menu'            => 'Primary',
										 'menu_class'      => 'rd-navbar-nav',
										 'theme_location'  => 'primary',
										 'fallback_cb'     => false,
										 'echo'            => false,
									 )
								 );

								 // Add the active class to the current menu item
								 echo str_replace('current-menu-item', 'current-menu-item active', $menu);
							 ?>
						</div>
					</div>
					<div class="navbar-line"></div>
				</nav>
			</div>
		</header>
