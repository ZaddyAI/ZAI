<?php
/**
 * Theme Functions.
 *
 * @package zai
 */
function zai_enqueue_scripts() {
// Register Styles.
   wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory(). '/style.css'), 'all');
   wp_register_style('bootstrap-css', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
// Register Scripts.
    wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', [], filemtime(get_template_directory(). '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    // enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    // enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}
add_action( 'wp_enqueue_scripts', 'zai_enqueue_scripts' );
