<?php
/**
 * Plugin Name: Beaver Builder Custom Modal Module
 * Plugin URI: https://lavertycreative.com/
 * Description: A plugin for creating custom modal module for beaver builder.
 * Version: 1.0
 * Author: Kyle Laverty, Laverty Creative
 * Author URI: https://lavertycreative.com/
 */
define( 'BB_CUSTOM_MODAL_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_CUSTOM_MODAL_MODULE_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modal module
 */
function bb_load_custom_modal_module() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'bb-modal/bb-modal.php';
	}
}
add_action( 'init', 'bb_load_custom_modal_module' );
