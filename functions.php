<?php
/**
 * Theme Functions.
 *
 * @package Zai
 */

 if ( ! defined( 'ZAI_DIR_PATH' ) ) {
	define( 'ZAI_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if (! defined( 'ZAI_DIR_URI' ) ) {
	define( 'ZAI_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}
require_once ZAI_DIR_PATH . '/inc/helpers/autoloader.php';

function zai_get_theme_instance() {
	\ZAI_THEME\Inc\ZAI_THEME::get_instance();
}

zai_get_theme_instance();

function zai_enqueue_scripts() {



}
add_action( 'wp_enqueue_scripts', 'zai_enqueue_scripts' );
