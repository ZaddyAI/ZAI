<?php
/**
 * Bootstraps the Theme.
 *
 * @package Zai
 */

 namespace ZAI_THEME\Inc;
 use ZAI_THEME\Inc\Traits\Singleton;
 class ZAI_THEME {
 use Singleton;
 protected function __construct() {
 // Load class.
 $this->setup_hooks();
 }
 protected function setup_hooks() {
 // Action and Filter  Hooks.
 add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
 }
 }
?>
