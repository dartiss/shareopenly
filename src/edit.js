/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from '@wordpress/block-editor';

import logo from '../assets/icon.svg';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object} props
 * @param {*}      props.attributes
 * @param {*}      props.setAttributes
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps( {
		className: 'shareopenly',
	} );
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
			<RichText
				tagName="a"
				href="#"
				value={ attributes.content }
				onChange={ ( content ) => setAttributes( { content } ) }
				identifier="content"
				allowedFormats={ [] }
				disableLineBreaks={ true }
			/>
		</div>
	);
}
