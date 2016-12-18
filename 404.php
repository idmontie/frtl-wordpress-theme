<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package frtl
 */

get_header(); ?>
	<section
		class="flex-center relative section-50 section-md-121 section-lge-213"
	>
	  <div class="shell small-h2s">

			<section class="error-404 not-found text-center">
				<header class="page-header">
					<h1 class="page-title h2"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'frtl' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Sorry about that, looks like we couldn\'t find the page you were looking for!', 'frtl' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>
	</section>

<?php
get_footer();
