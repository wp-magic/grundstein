<?php
/**
 * Initiate WPLess variables
 *
 * @package grundstein
 * @since 0.0.1
 */

if ( class_exists( 'WPLessPlugin' ) ) {
	$less = WPLessPlugin::getInstance();

	$attr_names = array(
		'layout_id'               => '1',
		'menu_layout_id'          => '1',

		'header_background_color' => '#191919',
		'header_border_color'     => '#ed1c24',
		'header_link_color'       => '#fff',
		'header_link_color_hover' => '#aaa',
		'header_text_color'       => '#fff',

		'footer_background_color' => '#191919',
		'footer_border_color'     => '#ed1c24',
		'footer_link_color'       => '#fff',
		'footer_link_color_hover' => '#aaa',
		'footer_text_color'       => '#fff',

		'body_background_color'   => '#3c3c3c',
		'border_color'            => '#ed1c24',
		'accent_color'            => '#ed1c24',
		'contrast_color'          => '#00ff00',
		'subtle_color'            => '#aaa',
		'link_color'              => '#fff',
		'link_hover_color'        => '#aaa',
		'text_color'              => '#fff',

		'error_color'             => '#ed1c24',
		'warning_color'           => '#ffff22',
		'success_color'           => '#00ff00',
	);

	$colors = [];
	foreach ( $attr_names as $attr_name => $attr_value ) {
		$colors[ $attr_name ] = get_theme_mod( $attr_name, $attr_value );
	}

	$less->setVariables( $colors );
}
