<?php
/**
 * Functions to activate, initiate and deactivate the plugin.
 *
 * @author   Marco Di Bella
 * @package  <PLUGIN-PACKAGE>
 */

namespace PLUGIN_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * The activation function for the plugin.
 *
 * @since  1.0.0
 */

function plugin_activation()
{
    // Do something!
}

register_activation_hook( __FILE__, 'PLUGIN_NAMESPACE\plugin_activation' );



/**
 * The init function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_init()
{
    // Load text domain
    load_plugin_textdomain( PLUGIN-DOMAIN, false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages' );
}

add_action( 'init', 'mdb_theme_core\plugin_init' );



/**
 * The deactivation function for the plugin.
 *
 * @since  1.0.0
 */

function plugin_deactivation()
{
    // Do something!
}

register_deactivation_hook( __FILE__, 'PLUGIN_NAMESPACE\plugin_deactivation' );



/**
 * The uninstall function for the plugin.
 *
 * @since  1.0.0
 */

function plugin_uninstall()
{
    // Do something!
    // Delete options!
    // Delete custom tables!
}

register_uninstall_hook( __FILE__, 'PLUGIN_NAMESPACE\plugin_uninstall' );
