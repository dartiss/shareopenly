<?php
/**
 * Plugin Name
 *
 * @package           shareopenly
 * @author            David Artiss
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       ShareOpenly
 * Plugin URI:        https://wordpress.org/plugins/plugin-name/
 * Description:       Plugin description
 * Version:           1.0
 * Requires at least: 4.6
 * Requires PHP:      8.0
 * Author:            David Artiss
 * Author URI:        https://artiss.blog
 * Text Domain:       tube-alloys
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

// Include the shared functions.

//require_once plugin_dir_path( __FILE__ ) . 'inc/shared.php';

require_once plugin_dir_path( __FILE__ ) . 'inc/get-settings.php';

require_once plugin_dir_path( __FILE__ ) . 'inc/add-to-content.php';
