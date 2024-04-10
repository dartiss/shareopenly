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

	$settings = array();

	// Get the post type.

	$settings['type'] = esc_html( get_option( 'shareopenly_type' ) );
	if ( ! $settings['type'] ) {
		$settings['type'] = 'post';
	}

	// Get the share text.

	$settings['text'] = esc_attr( get_option( 'shareopenly_text' ) );
	if ( ! $settings['text'] ) {
		$settings['text'] = __( 'Share this post on social media.', 'shareopenly' );
	}

	// Get the output priority.

	$settings['priority'] = esc_attr( get_option( 'shareopenly_priority' ) );
	if ( ! $settings['priority'] ) {
		$settings['priority'] = 10;
	}

	return $settings;
}

/**
 * Add to settings
 *
 * Add a field to the general settings screen for assorted options
 */
function sho_settings_init() {

	add_settings_section( 'shareopenly_section', __( 'ShareOpenly', 'shareopenly' ), function () {}, 'discussion' );

	add_settings_field( 'shareopenly_type', __( 'Sharing link location', 'shareopenly' ), 'shareopenly_type_callback', 'discussion', 'shareopenly_section', array( 'label_for' => 'shareopenly_type' ) );

	register_setting( 'general', 'shareopenly_type' );

	add_settings_field( 'shareopenly_text', __( 'Share Text', 'shareopenly' ), 'shareopenly_text_callback', 'discussion', 'shareopenly_section', array( 'label_for' => 'shareopenly_text' ) );

	register_setting( 'general', 'shareopenly_text' );

	add_settings_field( 'shareopenly_priority', __( 'Priority', 'shareopenly' ), 'shareopenly_priority_callback', 'discussion', 'shareopenly_section', array( 'label_for' => 'shareopenly_priority' ) );

	register_setting( 'general', 'shareopenly_priority' );
}

add_action( 'admin_init', 'sho_settings_init' );

/**
 * Type setting callback
 *
 * Output the settings field for whether to show the sharing link on posts and/or pages.
 */
function shareopenly_type_callback() {

	$options = sho_get_settings();
	$type    = $options['type'];

	echo '<select name="shareopenly_type">';
	echo '<option ' . selected( 'post', $type, false ) . ' value="post">' . esc_html__( 'Posts', 'shareopenly' ) . '</option>';
	echo '<option ' . selected( 'page', $type, false ) . ' value="page">' . esc_html__( 'Pages', 'shareopenly' ) . '</option>';
	echo '<option ' . selected( 'postpage', $type, false ) . ' value="post">' . esc_html__( 'Posts & Pages', 'shareopenly' ) . '</option>';
	echo '</select>';
}

/**
 * Share text setting callback
 *
 * Output the settings field for defining the sharing text.
 */
function shareopenly_text_callback() {

	$options = sho_get_settings();
	$text    = $options['text'];

	echo '<input name="shareopenly_text" size="40" type="text" value="' . esc_attr( $text ) . '" />';
}

/**
 * Priority setting callback
 *
 * Output the settings field for defining the priority of the output on the page.
 */
function shareopenly_priority_callback() {

	$options = sho_get_settings();
	$type    = $options['priority'];

	echo '<input name="shareopenly_priority" size="4" maxlength="4" type="text" value="' . esc_attr( $type ) . '" />';
}
