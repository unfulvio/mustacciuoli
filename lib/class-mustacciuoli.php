<?php
/**
 * Mustacciuoli Plugin Core Class
 *
 * @link       https://github.com/nekojira/mustacciuoli
 * @since      1.0.0
 *
 * @package    Mustacciuoli
 * @subpackage Mustacciuoli/lib
 */

/**
 * Mustacciuoli.
 *
 * @since      1.0.0
 * @package    Mustacciuoli
 * @subpackage Mustacciuoli/lib
 */
class Mustacciuoli {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Construct.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'mustacciuoli';
		$this->version = '1.1.0';

		add_action( 'plugins_loaded',   array( $this, 'set_locale' ) );
		add_action( 'wp_enqueue_scripts',  array( $this, 'enqueue' ) );

	}

	/**
	 * Set plugin text domain.
	 *
	 * @since   1.0.0
	 */
	public function set_locale() {
		load_plugin_textdomain(
			$this->plugin_name,
			false,
			dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Enqueue scripts.
	 * Will enqueue an implementation of mustache.js minified.
	 *
	 * @since   1.0.0
	 */
	public function enqueue() {
		wp_enqueue_script( 'mustacciuoli', plugin_basename( __FILE__ ) . '/assets/scripts/mustacciuoli.min.js', array( 'jquery' ), $this->version, false );
	}

}