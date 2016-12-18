<?php

/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage FRTL
 */

get_header();
?>

<section class="bg-image-fixed-1 menu-push">
  <div class="shell">
    <div class="range range-condensed relative">
      <div class="cell-sm-6 section-50 section-md-top-84">
        <div class="range range-xs-center">
          <div class="cell-md-8 inset-30 inset-md-15">
            <h3><span><?php echo get_field( 'contact_title' ); ?></span><span class="divider"></span></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="range range-condensed relative">
      <div class="cell-sm-6 relative">
        <div class="range range-xs-center">
          <div class="cell-md-8 inset-30 inset-md-15">
            <div class="contact-info">
              <?php echo do_shortcode( '[contact-form-7 id="' . get_field( 'contact_contact_form_7' ) . '" title="Contact Us"]' ); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="cell-sm-6">
        <div class="range range-xs-center">
          <div class="cell-md-8 cell-lg-6 inset-30 inset-md-15">
            <?php echo get_field( 'contact_content' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
