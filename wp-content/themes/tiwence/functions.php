<?php
/**
 * Tiwence functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Tiwence
 * @since 1.0
 */

function tiwence_setup() {

	load_theme_textdomain( 'tiwence' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'tiwence-featured-image', 2000, 1200, true );

	add_image_size( 'tiwence-thumbnail-avatar', 100, 100, true );

}

add_action( 'after_setup_theme', 'tiwence_setup' );
