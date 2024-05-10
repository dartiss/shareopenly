<?php
/**
 * Plugin Name
 *
 * @package           shareopenly
 * @author            David Artiss
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       ShareOpenly
 * Plugin URI:        https://wordpress.org/plugins/shareopenly/
 * Description:       The official plugin for ShareOpenly, adding modern, open social media sharing links to your website.
 * Version:           1.0
 * Requires at least: 4.6
 * Requires PHP:      8.0
 * Author:            David Artiss
 * Author URI:        https://artiss.blog
 * Text Domain:       shareopenly
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define global to hold the plugin base file name.

if ( ! defined( 'SHAREOPENLY_PLUGIN_BASE' ) ) {
	define( 'SHAREOPENLY_PLUGIN_BASE', plugin_basename( __FILE__ ) );
}

// Include the shared functions.

require_once plugin_dir_path( __FILE__ ) . 'inc/shared.php';

require_once plugin_dir_path( __FILE__ ) . 'inc/settings.php';

require_once plugin_dir_path( __FILE__ ) . 'inc/add-sharing-link.php';
