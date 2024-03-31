<?php
/**
 * Getting settings
 *
 * This is the code that adds the sharing links to the bottom of the content.
 *
 * @package plugin-slug
 */

/**
 * Add disclosure messages.
 *
 * @return   array     Settings array.
 */
function sho_get_settings() {

	// Get the saved settings.

	$settings = get_option( 'shareopenly-settings' );

	// If no settings exist, set up some default ones to return.

	if ( ! $settings ) {

		$settings['post']     = true;
		$settings['page']     = false;
		$settings['text']     = 'Share this post on social media.';
		$settings['priority'] = 10;
	}

	return $settings;
}
