# CMB2 Radio Image Field

## Description
Radio Image field type for [CMB2](https://github.com/WebDevStudios/CMB2).

##Install
You can install Radio Image field as a Wordpress plugin

1. Download plugin
2. Place in `wp-content/plugins` directory
3. Activate in Wordpress plugin section

## Usage
`radio_image` as a field type.

```php
 array(
	'name'       => __( 'Block Style', 'asdbstart' ),
	'desc'       => __( 'Select Block Style', 'asdbstart' ),
	'id'         => 'cat_style',
	'type'       => 'radio_image',
	'default'	=> 'style-1',
	'options' => array(
		'style-1'	=> __('Style 1', 'asdbstart'),
		'style-2'	=> __('Style 2', 'asdbstart'),
		'style-3'	=> __('Style 3', 'asdbstart'),
	),
	'src' => array(
		'style-1'	=> get_template_directory_uri() . '/assets/images/theme/style-1.png',
		'style-2'	=> get_template_directory_uri() . '/assets/images/theme/style-2.png',
		'style-3'	=> get_template_directory_uri() . '/assets/images/theme/style-3.png'
	),
),
```
## In Template
```php

$cat_style = get_post_meta($post->ID, 'cat_style', true);
//for WDS Page Builder
//$cat_style = wds_page_builder_get_this_part_data('cat_style');

echo $cat_style[0]; 
```

## Screenshots

![Image](screen-1.png?raw=true)
