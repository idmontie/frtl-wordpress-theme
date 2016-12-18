<?php

/**
 * Template Name: Venues Page
 *
 * @package WordPress
 * @subpackage FRTL
 */

get_header();
?>
<section
	class="flex-center relative section-50 section-md-121 section-lge-213"
>
  <div class="shell text-center">
    <h3><span><?php echo get_field('venues_title'); ?></span><span class="divider"></span></h3>
    <div class="text-left offset-top-40 offset-lg-top-129">
      <?php
        $venue_map = array();

        foreach ( tribe_get_venues() as $venue ) {
          $state = tribe_get_state( $venue->ID );
          $city  = tribe_get_city( $venue->ID );

          $region = $city . ', ' . $state;

          if ( array_key_exists( $region, $venue_map ) ) {
            array_push( $venue_map[$region], $venue );
          } else {
            $venue_map[$region] = array( $venue );
          }
        }

        foreach ( $venue_map as $key => $value ) {
          echo '<h2 class="h3">' . $key . '</h2>';

          echo '<ul class="rd-event-list">';
          foreach ( $value as $venue ) :
            $name = $venue->post_title;
            $address = tribe_get_address( $venue->ID );
          ?>
            <li class="panel panel-default padding-20">
							<div class="range">
	              <div title="<?php echo esc_attr( esc_html( $name ) ); ?>" class="author cell-sm-12">
									<h3 class="h4"><?php echo esc_html( $name ); ?></h3>
									<p><?php echo esc_html( $address ); ?></p>
								</div>
							</div>
              <ul class="rd-event-list">
                <?php
                  $events =  tribe_get_events( array( 'venue' => $venue->ID ) );

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
                      <div title="<?php echo esc_html( $event_time ); ?>" class="title cell-sm-12"> – <?php echo esc_html( $event_time ); ?></div>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php
          endforeach;
          echo '</ul>';
        }
      ?>

      <section class="bg-image-2 section-50 section-lg-199">
        <div class="shell text-center">
          <?php echo get_field('venues_contact_content'); ?>

          <div class="section-btns">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-md btn-dark">Contact Us &rsaquo;</a>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>
<?php
get_footer();
