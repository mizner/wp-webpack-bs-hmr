<?php
/**
 * Class MainController
 *
 * @package mizner\masterlist
 */

namespace mizner\plugin_core;

/**
 * The main loader for this plugin
 */
class Controller_Main {

	/**
	 * Shortcode
	 *
	 * @var object
	 */
	private $shortcode;

	/**
	 * Assets
	 *
	 * @var object
	 */
	private $assets;

	/**
	 * Constructor
	 *
	 * @param Shortcode $shortcode Register the Shortcode.
	 * @param Assets $assets Register the Assets.
	 */
	public function __construct( $shortcode, $assets ) {
		$this->shortcode = $shortcode;
		$this->assets    = $assets;
	}

	/**
	 * Do Work
	 */
	public function run() {
		$this->shortcode->run();
		$this->assets->run();
	}
}
