<?php

/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage FRTL
 */

get_header();
?>
<section
 class="bg-image-1 relative section-50 section-md-121 section-lge-213"
 style="background-image: url('<?php echo get_field('home_header_splash_image'); ?>'); background-color: <?php echo get_field('header_background_color'); ?>;"
>
  <div class="shell">
    <div class="range flex-center section-xs-top-50 section-md-top-121">
      <div class="shell text-center">
       <h2 class="capitalize"><?php echo get_field('home_header_title_text'); ?></h2>
       <h3 class="capitalize"><?php echo get_field('home_header_slogan_text'); ?></h2>

        <div class="section-btns">
          <a href="<?php echo esc_url( home_url( '/venues' ) ); ?>" class="btn btn-md btn-info btn-width-lg-370 btn-width-230">
            <?php echo get_field('home_header_event_text'); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-md btn-white btn-width-lg-370 btn-width-230">
            <?php echo get_field('home_header_about_text'); ?>
          </a>
        </div>
      </div>
      </div>
      <div class="range flex-center section-md-top-121">
        <div class="shell text-center">
          <h6 class="small veil reveal-sm-block">Follow us</h6>
          <?php require get_template_directory() . '/custom-templates/social-component.php'; ?>
          <a href="#" data-waypoint-to="#welcome" class="icon icon-lg icon-white arrows-expand22 veil reveal-sm-inline-block"></a>
        </div>
      </div>
  </div>
</section>
<!-- Page Content-->
<main class="page-content">
 <section id="welcome" class="section-50 section-lg-174 section-lg-bottom-174">
   <div class="shell text-center">
     <h3><span><?php echo get_field('home_section_1_title'); ?></span><span class="divider"></span></h3>
     <div class="range range-xs-center offset-top-40 offset-lg-top-72">
       <div class="cell-xs-10">
         <?php echo get_field('home_video_html'); ?>
       </div>
       <div class="cell-md-10 offset-top-40 offset-lg-top-60">
         <h4><?php echo get_field('home_section_1_subtitle'); ?></h4>
         <div class="shell offset-top-40">
           <?php echo get_field('home_section_1_content'); ?>
         </div>
       </div>
     </div>
   </div>
 </section>
 <section class="bg-image-2 section-50">
   <div class="shell text-center">
     <h3><span><?php echo get_field('home_events_title'); ?></span><span class="divider"></span></h3>
     <div class="text-left offset-top-40 offset-lg-top-129">
       <ul class="rd-event-list">
         <?php
           $events =  tribe_get_events();

           if ( empty( $events ) ) {
             echo '<li>No upcoming events</li>';
           }

           foreach ( $events as $event ):
         ?>
           <?php
            $event_time = ( new DateTime( $event->EventStartDate ) )->format( 'l, F j @ g:i a' );

            $event_location = tribe_get_venue_single_line_address( $event->ID, false );

            $event_title = empty( $event_location ) ? $event->post_title : $event_location;

          ?>
           <li>
             <a href="<?php echo tribe_get_event_link( $event->ID ); ?>" class="event-item range">
               <div title="<?php echo esc_html( $event_title ); ?>" class="author cell-sm-8"><?php echo esc_html( $event_title ); ?></div>
               <div title="<?php echo esc_html( $event_time ); ?>" class="title cell-sm-4"><?php echo esc_html( $event_time ); ?></div>
             </a>
           </li>
         <?php endforeach; ?>
       </ul>
       <div class="shell text-center">
         <div class="section-btns">
           <a href="<?php echo esc_url( home_url( '/events' ) ); ?>" class="btn btn-md btn-dark">See all events</a>
           <a href="<?php echo esc_url( home_url( '/venues' ) ); ?>" class="btn btn-md btn-info">Find A Location Near You &rsaquo;</a>
         </div>
       </div>
       <section class="bg-image-2 section-50 section-lg-199">
         <div class="shell text-center">
           <?php echo get_field('home_contact_content'); ?>

           <div class="section-btns">
             <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-md btn-dark">Contact Us &rsaquo;</a>
           </div>
         </div>
       </section>
     </div>
   </div>
 </section>

 <!-- <section
   class="bg-image-1 vertical-limiter-1 flex-center relative section-50 section-md-121 section-lge-213"
   style="background-image: url('<?php echo get_field('countdown_splash_image'); ?>');"
 >
   <div class="shell text-center">
     <h2>Our next event starts in</h2>
     <h2 data-type="until" data-time="17 Dec 2016 16:00" data-format="dhmss" class="countdown opacity-80"></h2>
     <a href="#" class="btn btn-md btn-white">Find A Location Near You</a>
   </div>
   <div class="absolute-block text-center">
     <h6 class="small veil reveal-sm-block">Follow us</h6>
     <ul class="list-inline">
       <li><a href="#" class="icon icon-sm icon-white fa-facebook-square"></a></li>
       <li><a href="#" class="icon icon-sm icon-white fa-google-plus-square"></a></li>
       <li><a href="#" class="icon icon-sm icon-white fa-twitter"></a></li>
       <li><a href="#" class="icon icon-sm icon-white fa-pinterest"></a></li>
       <li><a href="#" class="icon icon-sm icon-white fa-instagram"></a></li>
     </ul><a href="#" data-waypoint-to="#welcome" class="icon icon-lg icon-white arrows-expand22 veil reveal-sm-inline-block"></a>
   </div>
 </section> -->
</main>

<?php
get_footer();
