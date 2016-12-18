<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contact-page',
		'title' => 'Contact Page',
		'fields' => array (
			array (
				'key' => 'field_9854b5cdae8e6',
				'label' => 'Title Text',
				'name' => 'contact_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Contact Us',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),

      array (
        'key' => 'field_705985e0a7b0a',
        'label' => 'Contact Content',
        'name' => 'contact_content',
        'type' => 'wysiwyg',
        'required' => 1,
        'default_value' => '<p>Need to talk to a trivia pro? No problem, just fill out the short form and we\'ll be in contact within 24 hours. Whether you\'re just getting started or looking to give us some feedback we encourage you to contact us!</p>',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),

			array (
				'key' => 'field_0859b5cdae8e6',
				'label' => 'Contact Form 7 Id',
				'name' => 'contact_contact_form_7',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
    ),
    'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-templates/contact-template.php',
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
