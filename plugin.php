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



/** Variables and definitions **/

const PLUGIN_VERSION = '1.0.0';          // eg. 1.0.0
const PLUGIN_DOMAIN  = '<PLUGIN-TEXTDOMAIN>';



/** Include files */

require_once( plugin_dir_path( __FILE__ ) . 'includes/setup.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/backend.php' );
