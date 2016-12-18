<?php

/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage FRTL
 */

get_header();
?>
<section class="bg-image-fixed-1 section-sm-top-84">
  <div class="shell">
    <div class="range range-condensed relative">
      <div class="cell-sm-6 relative flex-center flex-center--no-grow padding-70 hidden-sm hidden-xs">
        <img src="<?php echo get_field('about_section_1_image'); ?>" />
      </div>
      <div class="cell-sm-6 relative text-center flex-center section-50 section-md-top-84">
        <div class="range range-xs-center">
          <div class="cell-md-8 cell-lg-6 inset-30 inset-md-15">
            <h3><span><?php echo get_field('about_section_1_title'); ?></span><span class="divider"></span></h3>
            <?php echo get_field('about_section_1_content'); ?>
          </div>
        </div>
      </div>
      <div class="cell-sm-6 relative flex-center flex-center--no-grow padding-70 hidden-md hidden-lg">
        <img src="<?php echo get_field('about_section_1_image'); ?>" />
      </div>
      <div class="decorative-line-2"></div>
    </div>
  </div>
</section>
<section class="bg-image-fixed-2">
  <div class="shell">
    <div class="range range-condensed relative">
      <div class="cell-sm-6 relative text-center flex-center section-50 section-md-top-84">
        <div class="range range-xs-center">
          <div class="cell-md-8 cell-lg-6 inset-30 inset-md-15">
            <h3><span><?php echo get_field('about_section_2_title'); ?></span><span class="divider"></span></h3>
            <?php echo get_field('about_section_2_content'); ?>
          </div>
        </div>
      </div>
      <div class="cell-sm-6 relative flex-center flex-center--no-grow padding-70">
        <img src="<?php echo get_field('about_section_2_image'); ?>" />
      </div>
      <div class="decorative-line-2"></div>
    </div>
  </div>
</section>
<section class="bg-image-fixed-1">
  <div class="shell">
    <div class="range range-condensed relative">
      <div class="cell-sm-6 relative flex-center flex-center--no-grow padding-70 hidden-sm hidden-xs">
        <img src="<?php echo get_field('about_section_3_image'); ?>" />
      </div>
      <div class="cell-sm-6 relative text-center flex-center section-50 section-md-top-84">
        <div class="range range-xs-center">
          <div class="cell-md-8 cell-lg-6 inset-30 inset-md-15">
            <h3><span><?php echo get_field('about_section_3_title'); ?></span><span class="divider"></span></h3>
            <?php echo get_field('about_section_3_content'); ?>
          </div>
        </div>
      </div>
      <div class="decorative-line-2"></div>
    </div>
  </div>
</section>
<?php
get_footer();
