<?php
/**
 * MizPlate Core
 *
 * @link              http://mizner.io
 * @author            Michael Mizner <mike@mizner.io>
 * @package           mizner/mizplate-core
 * @version           0.1
 *
 * @WordPress-plugin
 * Plugin Name: MizPlate Core
 * Plugin URI: http://mizner.io
 * Description:
 * Version: 0.1
 * Author: Michael Mizner
 * Author URI: http://mizner.io
 * License: GPL
 */

// Abort if this file is called directly.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Common Values
$plugin = (object) [
	'textdomain' => 'mizplate',
	'path'       => plugin_dir_path( __FILE__ ),
	'uri'        => plugin_dir_url( __FILE__ ),
];

// Classes
require_once 'includes/class.shortcode.php';
require_once 'includes/class.assets.php';
require_once 'includes/class.main-controller.php';

// Namespaces
use mizner\plugin_core\Shortcode;
use mizner\plugin_core\Assets;
use mizner\plugin_core\Controller_Main;

// Instances
$shortcode  = new Shortcode( $plugin );
$assets     = new Assets( $plugin );
$controller = new Controller_Main(
	$shortcode,
	$assets
);

// Run the Plugin
$controller->run();


