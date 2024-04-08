<?php
/**
 * Main Class
 *
 * @class WCDD
 * @package wc-dynamic-discounts
 * @author Iryna Berezhna
 */

defined( 'ABSPATH' ) || exit;

class WCDD {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'initialize_plugin' ) );
	}

	/**
	 * Initializes the plugin.
	 */
	public function initialize_plugin() {
		require_once 'includes/class-wcdd-handler.php';
		require_once 'includes/class-wcdd-settings.php';

		// Initialize classes.
		new Dynamic_Discounts_Settings();
		new Dynamic_Discounts_Handler();
	}
}

new WCDD();