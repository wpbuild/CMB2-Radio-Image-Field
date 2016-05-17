# CMB2 Radio Image Field

## Description
Radio Image field type for CMB2.

##Install
You can install slider field as a Wordpress plugin

1. Download plugin
2. Place in `wp-content/plugins` directory
3. Active in Wordpress plugin section

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
## Screenshots

![Image](screen-1.png?raw=true)
