<?php

/**
 * Adds ShareOpenly block
 *
 * This is the code that adds the sharing links to the ShareOpenly block for use with Block Themes.
 *
 * @package shareopenly
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function shareopenly_share_openly_block_init() {
	register_block_type(
		__DIR__ . '/../build',
		array(
			'render_callback' => 'share_openly_dynamic_block',
		)
	);
}
add_action( 'init', 'shareopenly_share_openly_block_init' );

/**
 * Renders the Block Contents adding the sharing link.
 *
 * @param array $attributes The block attributes
 * @param string $content The block content
 * @return string $content The updated block content
 *
 * @see https://developer.wordpress.org/reference/classes/wp_block_type/render/
 */
function share_openly_dynamic_block( $attributes, $content ) {

	$logo_url = "https://shareopenly.org/images/logo.svg";

	// Build the share_url query params
	global $wp, $post;
	$title = rawurlencode( esc_html( get_the_title() ) );
	$url = home_url( add_query_arg( array(), $wp->request ) );
	$share_url = add_query_arg( array(
		'url' => $url,
		'text' => $title,
	), 'https://shareopenly.org/share/' );

	// Set the Share URL to the block content using the HTML API
	$processor = new WP_HTML_Tag_Processor( $content );
	if ( $processor->next_tag( 'img' ) ) {
		$processor->set_attribute( 'src', $logo_url );
		$processor->set_attribute( 'loading', 'lazy' );
	}
	if ( $processor->next_tag( 'a' ) ) {
		$processor->set_attribute( 'href', $share_url );
	}

	return $processor->get_updated_html();
}
