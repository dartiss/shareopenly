<?php
/**
 * Add to content
 *
 * This is the code that adds the sharing links to the bottom of the content.
 *
 * @package shareopenly
 */

/**
 * Add sharing links to bottom of content.
 *
 * @param    string $content  Post/page content.
 * @return   string           Updated content.
 */
function sho_add_to_content( $content ) {

	$settings = sho_get_settings();

	// Work out if posts or pages are needed.

	$post = false;
	$page = false;

	if ( 'post' === $settings['type'] || 'postpage' === $settings['type'] ) {
		$post = true;
	}
	if ( 'page' === $settings['type'] || 'postpage' === $settings['type'] ) {
		$page = true;
	}

	// Now generate the shared output if we're on the right output type.

	if ( ( is_single() && $post ) || ( is_page() && $page ) ) {

		$title = rawurlencode( esc_html( get_the_title() ) );

		global $wp;
		$url = home_url( add_query_arg( array(), $wp->request ) );

		$content .= '<div class="shareopenly"><span class="dashicons dashicons-share"></span>&nbsp;<a href="https://shareopenly.org/share/?url=' . $url . '&text=' . $title . '">' . $settings['text'] . '</a></div>';
	}

	return $content;
}

$settings = sho_get_settings();

add_filter( 'the_content', 'sho_add_to_content', $settings['priority'] );
