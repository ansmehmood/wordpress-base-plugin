<?php

/**
 * Plugin Name:             AM Base Plugin
 * Plugin URI:              https://wordpress.org/
 * Description:             This is a base plugin template for WordPress with common functionality implemented that is necessary for all WordPress plugins, use it and customize it as per your requirements.
 * Version:                 1.0
 * Requires at least:       5.2
 * Requires PHP:            7.2
 * Author                   Ans Mehmood
 * Author URI               https://www.linkedin.com/in/ans-mehmood-dev
 * License                  GPL v2 or later
 * License URI              https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:             am-base-plugin
 */


/**
 * Security check! Stop execution if user access this file directly outside of WordPress Admin Panel
 */
if( !defined( 'ABSPATH' ) ) {

    die( 'Stop, Kangaroo are not allowed to jump in!' );
}


/**
 * Define plugin base url and plugin base path to be used throughout the plugin
 */
define( 'AM_BASE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AM_BASE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 * Plugin Activation
 */
function am_activation_callback() {

    if( file_exists( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-activator.php' ) ) {

        require_once( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-activator.php' );
        new AMActivator();
    }
}

register_activation_hook( __FILE__, 'am_activation_callback' );


/**
 * Plugin Deactivation
 */
function am_deactivation_callback() {

    if( file_exists( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-deactivator.php' ) ) {

        require_once( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-deactivator.php' );
        new AMDeactivator();
    }
}

register_deactivation_hook( __FILE__, 'am_deactivation_callback' );


if( file_exists( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-core.php' ) ) {
    
    require_once( AM_BASE_PLUGIN_PATH . '/includes/core/class-am-core.php' );
    new AMCore();
}