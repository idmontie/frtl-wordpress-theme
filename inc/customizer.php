<?php
/**
 * frtl Theme Customizer.
 *
 * @package frtl
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function frtl_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Remove unused Sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );

	// Logo Section
	$wp_customize->add_section( 'frtl_logo_section', array(
		'title'       => __( 'Logo', 'frtl' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'frtl_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frtl_logo', array(
    'label'    => __( 'Logo', 'frtl' ),
    'section'  => 'frtl_logo_section',
    'settings' => 'frtl_logo',
	) ) );

	// Social Links section
	$wp_customize->add_section( 'frtl_social_section', array(
		'title'       => __( 'Social Links', 'frtl' ),
    'priority'    => 30,
    'description' => 'Add your social media links',
	) );

	$wp_customize->add_setting( 'frtl_social_facebook' );
	$wp_customize->add_setting( 'frtl_social_google_plus' );
	$wp_customize->add_setting( 'frtl_social_twitter' );
	$wp_customize->add_setting( 'frtl_social_pinterest' );
	$wp_customize->add_setting( 'frtl_social_instagram' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frtl_social_facebook', array(
    'label'    => __( 'Facebook Link', 'frtl' ),
    'section'  => 'frtl_social_section',
    'settings' => 'frtl_social_facebook',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frtl_social_google_plus', array(
    'label'    => __( 'Google+ Link', 'frtl' ),
    'section'  => 'frtl_social_section',
    'settings' => 'frtl_social_google_plus',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frtl_social_twitter', array(
    'label'    => __( 'Twitter Link', 'frtl' ),
    'section'  => 'frtl_social_section',
    'settings' => 'frtl_social_twitter',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frtl_social_pinterest', array(
    'label'    => __( 'Pinterest Link', 'frtl' ),
    'section'  => 'frtl_social_section',
    'settings' => 'frtl_social_pinterest',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frtl_social_instagram', array(
    'label'    => __( 'Instagram Link', 'frtl' ),
    'section'  => 'frtl_social_section',
    'settings' => 'frtl_social_instagram',
	) ) );
}
add_action( 'customize_register', 'frtl_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function frtl_customize_preview_js() {
	wp_enqueue_script( 'frtl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'frtl_customize_preview_js' );
