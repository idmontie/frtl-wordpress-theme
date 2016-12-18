<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page',
		'title' => 'Home Page',
		'fields' => array (
			array (
				'key' => 'field_5850ccf404a74',
				'label' => 'Header Splash Image',
				'name' => 'home_header_splash_image',
				'type' => 'image',
				'instructions' => 'The splash image for the top of your home page',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5854ae4182f20',
				'label' => 'Header Background Color',
				'name' => 'home_header_background_color',
				'type' => 'color_picker',
				'instructions' => 'Pick a color that will appear right before the Header Splash Image loads',
				'default_value' => '#333',
			),
			array (
				'key' => 'field_5854b5cdae8e6',
				'label' => 'Header Title Text',
				'name' => 'home_header_title_text',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Front Row Trivia Live',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5854b5e0ae8e7',
				'label' => 'Header Slogan Text',
				'name' => 'home_header_slogan_text',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Something catchy here',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5854b5eeae8e8',
				'label' => 'Video',
				'name' => 'home_video',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
      array (
        'key' => 'field_5855f5d4a7b0c',
        'label' => 'Section 1 Title',
        'name' => 'home_section_1_title',
        'type' => 'text',
        'default_value' => 'Play Trivia with Friends',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5855f5d4c7b0c',
        'label' => 'Section 1 Subtitle',
        'name' => 'home_section_1_subtitle',
        'type' => 'text',
        'default_value' => 'Leaders in live social entertainment',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5955f5e0a7b0b',
        'label' => 'Section 1 Content',
        'name' => 'home_section_1_content',
        'type' => 'wysiwyg',
        'required' => 1,
        'default_value' => '<p>We are Front Row Trivia Live, the nation’s premiere interactive live trivia service!</p>

        <p>We are leaders in live social entertainment, creating exciting interactive games that bring people together and drive revenue to our clients in the hospitality &amp; gaming industry.</p>',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_5855f5d3c8b0c',
        'label' => 'Events Title',
        'name' => 'home_events_title',
        'type' => 'text',
        'default_value' => 'Upcoming Events',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_6955e5e0a7b0b',
        'label' => 'Contact Content',
        'name' => 'home_contact_content',
        'type' => 'wysiwyg',
        'required' => 1,
        'default_value' => '<p>Don\'t see you location? Looking to host fun and exciting trivia at your establishment?</p>',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-templates/home-template.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
}