/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from '@wordpress/block-editor';

import logo from '../assets/icon.svg';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @param {Object} props
 * @param {Object} props.attributes
 *
 * @return {Element} Element to render.
 */
export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	const logoAlt = 'ShareOpenly logo';

	return (
		<div { ...blockProps }>
			<img
				src={ logo }
				alt={ logoAlt }
				decoding="async"
				width="18"
				height="18"
			/>
			&nbsp;
			<RichText.Content
				tagName="a"
				href="#"
				value={ attributes.content }
			/>
		</div>
	);
}
