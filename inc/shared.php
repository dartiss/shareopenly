<?php
/**
 * Shared Functions
 *
 * A group of functions shared across my plugins, for consistency.
 *
 * @package plugin-slug
 */

/**
 * Add meta to plugin details
 *
 * Add options to plugin meta line
 *
 * @version  1.1
 * @param    string $links  Current links.
 * @param    string $file   File in use.
 * @return   string         Links, now with settings added.
 */
function xxx_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'plugin-slug.php' ) ) {

		$links = array_merge(
			$links,
			array( '<a href="https://github.com/dartiss/plugin-name">' . __( 'Github', 'text-domain' ) . '</a>' ),
			array( '<a href="https://wordpress.org/support/plugin/plugin-slug">' . __( 'Support', 'text-domain' ) . '</a>' ),
			array( '<a href="https://artiss.blog/donate">' . __( 'Donate', 'text-domain' ) . '</a>' ),
			array( '<a href="https://wordpress.org/support/plugin/plugin-slug/reviews/?filter=5" title="' . __( 'Rate the plugin on WordPress.org', 'text-domain' ) . '" style="color: #ffb900">' . str_repeat( '<span class="dashicons dashicons-star-filled" style="font-size: 16px; width:16px; height: 16px"></span>', 5 ) . '</a>' ),
		);
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'xxx_plugin_meta', 10, 2 );

/**
 * To replace:
 * xxx -> Function prefix
 * text-domain
 * plugin-slug -> wp.org slug
 * plugin-name -> Name, as used on Github
 */

/**
 * Modify actions links.
 *
 * Add or remove links for the actions listed against this plugin
 *
 * @version  1.1
 * @param    string $actions      Current actions.
 * @param    string $plugin_file  The plugin.
 * @return   string               Actions, now with deactivation removed!
 */
function xxx_action_links( $actions, $plugin_file ) {

	// Make sure we only perform actions for this specific plugin!
	if ( strpos( $plugin_file, 'plugin-slug.php' ) !== false ) {

		// Add link to the settings page.
		if ( current_user_can( 'manage_options' ) ) {
			array_unshift( $actions, '<a href="admin.php?page=settings-slug">' . __( 'Settings', 'text-domain' ) . '</a>' );
		}
	}

	return $actions;
}

add_filter( 'plugin_action_links', 'xxx_action_links', 10, 2 );

/**
 * To replace:
 * xxx -> Function prefix
 * text-domain
 * plugin-slug -> wp.org slug
 * settings-slug -> The slug of the settings page
 *
 * Also make sure the capability check on line 15 matches that for adding the settings menu.
 */


/**
 * WordPress Fork Check
 *
 * Deactivate the plugin if an unsupported fork of WordPress is detected.
 *
 * @version 1.0
 */
function xxx_fork_check() {

	// Check for a fork.

	if ( function_exists( 'calmpress_version' ) || function_exists( 'classicpress_version' ) ) {

		// Grab the plugin details.

		$plugins = get_plugins();
		$name    = $plugins[ PLUGIN_NAME_PLUGIN_BASE ]['Name'];

		// Deactivate this plugin.

		deactivate_plugins( PLUGIN_NAME_PLUGIN_BASE );

		// Set up a message and output it via wp_die.

		/* translators: 1: The plugin name. */
		$message = '<p><b>' . sprintf( __( '%1$s has been deactivated', 'text-domain' ), $name ) . '</b></p><p>' . __( 'Reason:', 'text-domain' ) . '</p>';
		/* translators: 1: The plugin name. */
		$message .= '<ul><li>' . __( 'A fork of WordPress was detected.', 'text-domain' ) . '</li></ul><p>' . sprintf( __( 'The author of %1$s will not provide any support until the above are resolved.', 'text-domain' ), $name ) . '</p>';

		$allowed = array(
			'p'  => array(),
			'b'  => array(),
			'ul' => array(),
			'li' => array(),
		);

		wp_die( wp_kses( $message, $allowed ), '', array( 'back_link' => true ) );
	}
}

add_action( 'admin_init', 'xxx_fork_check' );

// Define global to hold the plugin base file name.

if ( ! defined( 'PLUGIN_NAME_PLUGIN_BASE' ) ) {
	define( 'PLUGIN_NAME_PLUGIN_BASE', plugin_basename( __FILE__ ) );
}

/**
 * To replace:
 * xxx -> Function prefix
 * text-domain
 * PLUGIN_NAME -> Friendly, underscored name of plugin
 */
