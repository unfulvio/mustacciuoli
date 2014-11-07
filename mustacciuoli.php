<?php
/**
 * @link              https://github.com/nekojira/mustacciuoli/
 * @since             1.0.0
 * @package           Mustacciuoli
 * @author            nekojira <fulvio@nekojira.com>
 *
 * @wordpress-plugin
 * Plugin Name:       Mustacciuoli
 * Plugin URI:        https://github.com/nekojira/mustacciuoli/
 * Description:       Add support to Mustache template engine in WordPress. Includes implementations of Mustache in both PHP and Javascript.
 * Version:           1.0.0
 * Author:            nekojira
 * Author URI:        https://github.com/nekojira/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mustacciuoli
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) die;

/**
 * Include Mustache.php library.
 * Copyright (c) 2010-2014 Justin Hileman
 */
require_once plugin_dir_path( __FILE__ ) . 'lib/inc/mustache-php/src/Mustache/Autoloader.php';

/**
 * The main class of this plugin.
 */
require_once plugin_dir_path( __FILE__ ) . 'lib/class-mustacciuoli.php';

/**
 * Instantiate this plugin.
 */
$Mustacciuoli = new Mustacciuoli();