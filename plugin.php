<?php
/*
 * Plugin Name:         ph_PLUGIN-TITLE
 * Plugin URI:          ph_PLUGIN-URI
 * Description:         ph_PLUGIN-DESCRIPTION.
 * Author:              Marco Di Bella
 * Author URI:          https://www.marcodibella.de
 * License:             MIT License
 * Requires at least:   ph_WORDPRESS-MINIMUM-VERSION
 * Tested up to:        ph_WORDPRESS-VERSION
 * Requires PHP:        ph_PHP-VERSION
 * Version:             ph_PLUGIN-SEMANTIC-VERSION
 * Text Domain:         ph_PLUGIN-TEXTDOMAIN
 * Domain Path:         /languages
 */

namespace ph_PLUGIN_NAMESPACE;


/** Prevent direct access */
defined( 'ABSPATH' ) or exit;



/** Variables and definitions */
define( __NAMESPACE__ . '\PLUGIN_VERSION', 'ph_PLUGIN-SEMANTIC-VERSION' );



/** Include files */
require_once 'includes/backend.php';



/** Add hooks */
register_activation_hook( __FILE__, __NAMESPACE__ . '\plugin_activation' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\plugin_deactivation' );
register_uninstall_hook( __FILE__, __NAMESPACE__ . '\plugin_uninstall' );
add_action( 'init', __NAMESPACE__ . '\plugin_init' );



/**
 * The init function for the plugin.
 *
 * @since 1.0.0
 *
 * @param   void
 *
 * @return  void
 */
function plugin_init() {

    // Load text domain, use relative path to the plugin's language folder
    load_plugin_textdomain( 'tw-safelist-generator', false, plugin_basename( __FILE__ ) . '/languages' );

}



/**
 * The activation function for the plugin.
 *
 * @since 1.0.0
 *
 * @param   void
 *
 * @return  void
 */
function plugin_activation() {

    if ( ! current_user_can( 'activate_plugins' ) ) {
        return;
    }

    // Do something!
}



/**
 * The deactivation function for the plugin.
 *
 * @since 1.0.0
 *
 * @param   void
 *
 * @return  void
 */
function plugin_deactivation() {

    if ( ! current_user_can( 'activate_plugins' ) ) {
        return;
    }

    // Do something!
}




/**
 * The uninstall function for the plugin.
 *
 * @since 1.0.0
 *
 * @param   void
 *
 * @return  void
 */
function plugin_uninstall() {

    if ( ! current_user_can( 'delete_plugins' ) ) {
        return;
    }

    // Do something!
    // Delete options!
    // Delete custom tables!
}
