<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package i2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function i2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'i2_jetpack_setup' );
