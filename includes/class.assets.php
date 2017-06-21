<?php
/**
 * Class Assets
 *
 * @package mizner\masterlist_assets
 */

namespace mizner\plugin_core;

class Assets {

	function __construct( $plugin ) {
		$this->plugin = $plugin;
	}

	function run() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 15 );
	}

	function enqueue() {

		// wp_enqueue_style( $this->plugin->textdomain . '_css', $this->plugin->uri . '/dist/' . $this->plugin->textdomain . '.min.css', [], '1.0', 'all' );
		wp_enqueue_script( $this->plugin->textdomain . '_js', $this->plugin->uri . '/dist/' . $this->plugin->textdomain . '.min.js', [], '1.0', true );
		// wp_enqueue_script( 'webpack-test-js', $this->plugin->uri . '/dist/index.js', [], '1.0', true );
	}
}