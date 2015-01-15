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
 * Description:       Add support to Mustache template engine in WordPress. Includes implementations of Mustache for both PHP and Javascript.
 * Version:           1.1.2
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
if ( ! class_exists( 'Mustache_Engine' ) ) {
	require 'vendor/autoload.php';
	Mustache_Autoloader::register();
}

/**
 * The main class of this plugin.
 */
require_once 'lib/class-mustacciuoli.php';

/**
 * Instantiate this plugin.
 */
$mustacciuoli = new Mustacciuoli();