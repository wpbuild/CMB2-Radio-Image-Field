<?php
/**
 * Plugin Name: CMB2 Radio Image Field
 * Plugin URI:  https://github.com/wpbuild/CMB2-Radio-Image-Field
 * Description: Radio Image field type for Custom Metaboxes and Fields for WordPress
 * Version:     0.1.0
 * Author:      Mikhail "kitassa" Tkacheff
 * License:     GPLv2+
 */
class ASDB_Radio_Image_Field {
	const VERSION = '0.1.0';
	public function hooks() {
		add_filter( 'cmb2_render_radio_image',  array( $this, 'cmb_render_radio_image' ), 10, 5 );
	}
	public function cmb_render_radio_image( $field, $value, $object_id, $object_type, $field_type_object ) {
		$this->setup_admin_scripts();
		$options = $field->args['options'];
		$src = $field->args['src'];
		$i = 1;
		$values = (array) $value;

		if ($options) {
			echo '<div class="cmb-row cmb-type-radio-image ">';
				echo '<ul class="cmb2-radio-list cmb2-list">';

    		foreach ( $options as $k => $v) {
            	$args = array(
			'value' => $k,
			'label' => '<img src="' . esc_url( $src[$k] ) . '" alt="' . esc_attr( $v ) .'" title="' . esc_attr( $v ) .'" class="cmb-radio-image " />',
			'type' => 'radio',
			'name' => $field->args['_name'] . '[]',
		);
		if ( in_array( $k, $values ) ) {
			$args[ 'checked' ] = 'checked';
			$args[ 'label' ] = '<img src="' . esc_url( $src[$k] ) . '" alt="' . esc_attr( $v ) .'" title="' . esc_attr( $v ) .'" class="cmb-radio-image cmb-radio-image-selected " />';
		}
            	echo $field_type_object->list_input( $args, $i );
            	$i++;
		}
			echo '</ul><br class="clear">';
			$field_type_object->_desc( true, true );
			echo '</div>';
		}
	}

	public function setup_admin_scripts( ) {
		wp_enqueue_script( 'cmb2_radio_image_field_js',  plugins_url( 'js/script.js', __FILE__ ), array( 'jquery' ), self::VERSION );
		wp_enqueue_style( 'cmb2_radio_image_field_css', plugins_url( 'css/style.css', __FILE__ ), '', self::VERSION );
	}
}
$asdb_radio_image_field = new ASDB_Radio_Image_Field();
$asdb_radio_image_field->hooks();
