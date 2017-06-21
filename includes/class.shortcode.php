<?php
/**
 * Class Shortcode
 *
 * @package mizner\masterlist
 */

namespace mizner\plugin_core;

class Shortcode {

	function __construct( $plugin ) {
		$this->plugin = $plugin;
	}

	function run() {
		add_shortcode( 'example-shortcode', [ $this, 'template' ] );
	}

	function template() {
		ob_start();
		include( $this->plugin->path . 'templates/endpoint.php' );

		return ob_get_clean();
	}
}