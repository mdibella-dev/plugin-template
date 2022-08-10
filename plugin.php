<?php
/**
 * Plugin Name:     <PLUGIN-TITLE>
 * Plugin URI:      <PLUGIN-URI>
 * Description:     <PLUGIN-DESCRIPTION>.
 * Author:          Marco Di Bella
 * Author URI:      https://www.marcodibella.de
 * Version:         <PLUGIN-VERSION>
 * Text Domain:     <PLUGIN-TEXTDOMAIN>
 * Domain Path:     /languages
 *
 * @author  Marco Di Bella <kontakt@marcodibella.de>
 * @package <PLUGIN-PACKAGE>
 */

namespace PLUGIN_NAMESPACE;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Variables and definitions **/

$pligin_version = '1.0.0';          // eg. 1.0.0
$plugin_path    = plugin_dir_path( __FILE__ );



/** Include files */

require_once( $plugin_path . 'includes/setup.php' );
