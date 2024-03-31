<?php
/**
 * Add to content
 *
 * This is the code that adds the sharing links to the bottom of the content.
 *
 * @package plugin-slug
 */

/**
 * Add disclosure messages.
 *
 * @param    string $content  Post/page content.
 * @return   string           Updated content.
 */
function sho_add_to_content( $content ) {

	$settings = sho_get_settings();

	if ( ( is_single() && $settings['post'] ) || ( is_page() && $settings['page'] ) ) {

		$title = rawurlencode( esc_html( get_the_title() ) );

		global $wp;
		$url = home_url( add_query_arg( array(), $wp->request ) );

		$content .= '<p><a href="https://shareopenly.org/share/?url=' . $url . '&text=' . $title . '">' . $settings['text'] . '</a></p>';
	}

	return $content;
}

$settings = sho_get_settings();

add_filter( 'the_content', 'sho_add_to_content', $settings['priority'] );
