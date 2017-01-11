<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_venues-page',
		'title' => 'Venues Page',
		'fields' => array (
			array (
				'key' => 'field_5899f558a7b05',
				'label' => 'Title',
				'name' => 'venues_title',
        'type' => 'text',
				'default_value' => 'Our Venues and Locations',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5850ddfd0dd7f',
				'label' => 'Venues Image',
				'name' => 'venues_image',
				'type' => 'image',
				'instructions' => 'The splash image for the top of your venues page',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5855f58ba7f17',
				'label' => 'Contact Content',
				'name' => 'venues_contact_content',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => 'Don\'t see a location near you? Want to have trivia at your venue?',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
    'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-templates/venues-template.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
}
