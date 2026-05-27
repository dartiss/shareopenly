<?php
/**
 * Add to content
 *
 * This is the code that adds the sharing links to the bottom of the content.
 *
 * @package shareopenly
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add sharing links to bottom of content.
 *
 * @param    string $content  Post/page content.
 * @return   string           Updated content.
 */
function shareopenly_add_to_content( $content ) {

	$settings           = shareopenly_get_settings();
	$support_post_types = $settings['type'];

	// Output link on selected post types.

	foreach ( $support_post_types as $post_type ) {
		if ( is_singular( $post_type ) ) {
			$title = rawurlencode( esc_html( get_the_title() ) );

			global $wp;
			$url = home_url( add_query_arg( array(), $wp->request ) );

			$content .= '<div class="shareopenly"><img src="' . esc_url( plugins_url( '../images/logo.svg', __FILE__ ) ) . '" alt="" referrerpolicy="no-referrer">&nbsp;<a href="' . esc_url( 'https://shareopenly.org/share/?url=' . $url . '&text=' . $title ) . '" loading="lazy" decoding="async" aria-hidden="true" />' . esc_html( $settings['text'] ) . '</a></div>';
		}
	}

	return $content;
}

$settings = shareopenly_get_settings();

add_filter( 'the_content', 'shareopenly_add_to_content', $settings['priority'] );
