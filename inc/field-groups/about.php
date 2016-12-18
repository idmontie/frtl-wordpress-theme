<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-page',
		'title' => 'About Page',
		'fields' => array (
			array (
				'key' => 'field_5855f558a7b05',
				'label' => 'Section 1 Image',
				'name' => 'about_section_1_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5855f573a7b06',
				'label' => 'Section 1 Title',
				'name' => 'about_section_1_title',
				'type' => 'text',
				'default_value' => 'Why Us',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5855f58ba7b07',
				'label' => 'Section 1 Content',
				'name' => 'about_section_1_content',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => 'We are leaders in experiential entertainment, passionately creating exciting interactive games that bring people together while developing solutions that drive revenue to our clients in the hospitality & gaming industry.',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5855f5c2a7b09',
				'label' => 'Section 2 Image',
				'name' => 'about_section_2_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5855f5d4a7b0a',
				'label' => 'Section 2 Title',
				'name' => 'about_section_2_title',
				'type' => 'text',
				'default_value' => 'Products and Services',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5855f5e0a7b0b',
				'label' => 'Section 2 Content',
				'name' => 'about_section_2_content',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => '<p>
		We offer fun and interactive trivia games that can be branded to each location.
	</p>
	<p>
		Our games our customizable and tailored to a variety of clients including bars, restaurants, casinos, golf and retirement communities, school, sports teams, cruise ships, and corporations.
	</p>
	<p>
		We provide hosting for live trivia shows & special events.
	</p>',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5855f5f2a7b0c',
				'label' => 'Section 3 Image',
				'name' => 'about_section_3_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5855f608a7b0d',
				'label' => 'Section 3 Title',
				'name' => 'about_section_3_title',
				'type' => 'text',
				'default_value' => 'The Game',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5855f624a7b0e',
				'label' => 'Section 3 Content',
				'name' => 'about_section_3_content',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => '<p>
		We believe we have the most fun, innovative, and high energy game on the market.
	</p>
	<p>
		If you\'re not playing you\'re going to want to play!
	</p>',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
    'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'custom-templates/about-template.php',
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
