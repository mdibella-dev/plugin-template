<?php
/**
 * Plugin Name:         <PLUGIN-TITLE>
 * Plugin URI:          <PLUGIN-URI>
 * Description:         <PLUGIN-DESCRIPTION>.
 * Author:              Marco Di Bella
 * Author URI:          https://www.marcodibella.de
 * Requires at least:   <WORDPRESS-MINIMUM-VERSION>
 * Tested up to:        <WORDPRESS-VERSION>
 * Requires PHP:        <PHP-VERSION>
 * Version:             <PLUGIN-VERSION>
 * Text Domain:         <PLUGIN-TEXTDOMAIN>
 * Domain Path:         /languages
 *
 * @author   Marco Di Bella
 * @package  <PLUGIN-PACKAGE>
 */

namespace PLUGIN_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Variables and definitions */

define( 'PLUGIN_VERSION', '<PLUGIN-VERSION>' );
define( 'PLUGIN_DOMAIN', '<PLUGIN-TEXTDOMAIN>' );
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );



/** Include files */

require_once( PLUGIN_DIR . 'includes/setup.php' );
require_once( PLUGIN_DIR . 'includes/backend.php' );
