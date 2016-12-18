<ul class="list-inline">
  <?php if ( !empty(get_theme_mod( 'frtl_social_facebook' ) ) ): ?>
  <li>
    <a
      href="<?php echo esc_url( get_theme_mod( 'frtl_social_facebook' ) ); ?>"
      class="icon icon-sm icon-white fa-facebook-square"
     ></a>
  </li>
 <?php endif; ?>

 <?php if ( !empty(get_theme_mod( 'frtl_social_google_plus' ) ) ): ?>
 <li>
   <a
     href="<?php echo esc_url( get_theme_mod( 'frtl_social_google_plus' ) ); ?>"
     class="icon icon-sm icon-white fa-google-plus-square"
    ></a>
 </li>
 <?php endif; ?>

 <?php if ( !empty(get_theme_mod( 'frtl_social_twitter' ) ) ): ?>
 <li>
  <a
    href="<?php echo esc_url( get_theme_mod( 'frtl_social_twitter' ) ); ?>"
    class="icon icon-sm icon-white fa-twitter-square"
   ></a>
 </li>
 <?php endif; ?>

 <?php if ( !empty(get_theme_mod( 'frtl_social_pinterest' ) ) ): ?>
 <li>
   <a
     href="<?php echo esc_url( get_theme_mod( 'frtl_social_pinterest' ) ); ?>"
     class="icon icon-sm icon-white fa-pinterest"
    ></a>
 </li>
 <?php endif; ?>

 <?php if ( !empty(get_theme_mod( 'frtl_social_instagram' ) ) ): ?>
 <li>
  <a
    href="<?php echo esc_url( get_theme_mod( 'frtl_social_instagram' ) ); ?>"
    class="icon icon-sm icon-white fa-instagram"
   ></a>
 </li>
 <?php endif; ?>

</ul>
