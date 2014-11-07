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
		$this->version = '1.0.0';

		add_action( 'plugins_loaded',   array( $this, 'set_locale' ) );
		add_action( 'init', array( $this, 'init' ) );
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
	 * Enqueue javascript.
	 *
	 * @since   1.0.0
	 */
	public function enqueue() {
		wp_enqueue_script( 'hogan', plugin_dir_url( __FILE__ ) . '/inc/hogan-js/web/builds/3.0.2/hogan-3.0.2.min.mustache.js', '', '3.0.2', false );
	}

	/**
	 * Instantiate Mustache PHP.
	 *
	 * Registers the new global 'mustache' which can be accessed by theme files for templating.
	 * By default, Mustacciuoli will configure Mustache loader pointing to a directory in the active theme.
	 * You can override this configuration by hooking into two filters before rendering any template:
	 * 'mustache_templates_path' and 'mustache_partials_path'
	 *
	 * @since   1.0.0
	 */
	public function init() {

		$loader = apply_filters( 'mustache_templates_path', get_template_directory() . '/templates/views' );
		$partials_loader = apply_filters( 'mustache_partials_path', get_template_directory() . '/templates/views/partials' );

		if ( class_exists( 'Mustache_Engine' ) ) :

			$GLOBALS['mustache'] = new Mustache_Engine( array(
				'loader'          => new Mustache_Loader_FilesystemLoader( $loader ),
				'partials_loader' => new Mustache_Loader_FilesystemLoader( $partials_loader ),
				'charset'         => get_bloginfo( 'charset' ),
				'cache'           => dirname( dirname(__FILE__) ) . 'cache',
			) );

		endif;

	}

}