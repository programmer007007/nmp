<?php

/**
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 */

if ( ! function_exists( 'brk_navmenus' ) ) {

	function brk_navmenus() {

		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Menu', 'bricks' ),
				'footer' => esc_html__( 'Footer Menu', 'bricks' ),
                'footer_left_menu' => esc_html__( 'Footer Left Menu', 'bricks' ),
                'footer_right_menu' => esc_html__( 'Footer Right Menu', 'bricks' ),
			)
		);

	}
}

add_action( 'after_setup_theme', 'brk_navmenus' );
