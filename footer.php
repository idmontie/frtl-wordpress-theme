<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frtl
 */

?>
<!-- Page Footer-->
<footer class="page-foot bg-image-fixed-2 section-50 section-lge-121 section-top-50">
	<div class="shell">
		<div class="range range-sm-middle">
			<div class="cell-sm-6 text-sm-left">

			</div>
		</div>
		<div class="range range-sm-middle">
			<div class="cell-sm-6 text-center text-sm-left">
				<!-- Brand--><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rd-navbar-brand clearfix">
					<div class="brand-name"><?php echo get_bloginfo( 'name', 'display' ); ?></div></a>

					<?php
						$menu = wp_nav_menu(
							 array(
								 'container'       => 'div',
								 'menu'            => 'Footer',
								 'theme_location'  => 'footer',
								 'menu_class'      => 'footer-menu-list',
								 'fallback_cb'     => false,
								 'echo'            => false,
							 )
						 );

						 // Add the active class to the current menu item
						 echo str_replace('menu-item ', 'hover-effect-2 menu-item ', $menu);
					 ?>

					 <div class="rd-navbar-brand">
						 <div class="brand-name">
							 <?php require get_template_directory() . '/custom-templates/social-component.php'; ?>
						 </div>
					 </div>

					 <div class="rd-navbar-brand">
						 <div class="brand-name small-text">
							<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> &#169;
							<span id="copyright-year"></span> &bull;
							<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="hover-effect-2">Privacy Policy</a>
		 				</div>
					</div>
			</div>
			<div class="cell-sm-6 text-center text-sm-right">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
