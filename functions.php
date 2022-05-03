<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Lark_One
 * @since Lark_One 1.0
 */

if (function_exists('add_theme_support')) {
 add_theme_support('menus');
}

add_action( 'wp_enqueue_scripts', 'theme_lark_scripts' );

function theme_lark_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.6.0', true );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/libs/slick-theme.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/libs/slick.css' );
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/libs/slick.min.js' );
}
