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
 * Version:           1.1.4
 * Author:            Fulvio Notarstefano
 * Author URI:        https://github.com/nekojira/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mustacciuoli
 * Domain Path:       /languages
 */

/**
 * Mustacciuoli
 * Copyright (c) 2014-2015 Fulvio Notarstefano <fulvio.notarstefano@gmail.com>
 * and contributors
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'WPINC' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Mustacciuoli PHP 5.4.0 minimum.
 * WordPress supports 5.2.4 and recommends 5.4.0.
 * @link https://make.wordpress.org/plugins/2015/06/05/policy-on-php-versions/
 */
if ( version_compare( PHP_VERSION, '5.4.0', '<') ) {
	add_action( 'admin_notices',
		function() {
			echo '<div class="error"><p>'.
			     sprintf( __( "Mustacciuoli requires PHP 5.4 or above to function properly. Detected PHP version on your server is %s. Please upgrade PHP to activate Mustacciuoli or remove the plugin.", 'mustacciuoli' ), phpversion() ? phpversion() : '`undefined`' ) .
			     '</p></div>';
			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
		}
	);
	return;
}

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