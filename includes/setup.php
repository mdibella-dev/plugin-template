<?php
/**
 * Functions to activate, initiate and deactivate the plugin.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package <PLUGIN-PACKAGE>
 */

namespace PLUGIN_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * The activation function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_activation()
{
    // Do something!
}

register_activation_hook( __FILE__, 'PLUGIN_NAMESPACE\plugin_activation' );



/**
 * The deactivation function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_deactivation()
{
    // Do something!
}

register_deactivation_hook( __FILE__, 'PLUGIN_NAMESPACE\plugin_deactivation' );



/**
 * Load the backend scripts and styles.
 *
 * @since 1.1.0
 */

function admin_enqueue_scripts()
{
    // Do something!
}

add_action( 'admin_enqueue_scripts','PLUGIN_NAMESPACE\admin_enqueue_scripts' );
