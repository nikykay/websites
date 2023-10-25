<?php
/**
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var int|string $post_id The post ID this block is saved to.
 */

// List of default Gutenberg blocks that can be used here - https://developer.wordpress.org/block-editor/reference-guides/core-blocks/
$allowed_blocks = array( 'core/image', 'core/paragraph', 'core/heading', 'core/button', 'core/buttons' );

$template = array(
	[ 'core/image', [] ],
	[ 'core/heading', [ 'placeholder' => 'Block title', 'level' => '3' ] ],
	[ 'core/paragraph', [ 'placeholder' => 'Add a root-level paragraph', ] ],
	[
		'core/buttons',
		[],
		[
			[ 'core/button', [ 'placeholder' => 'Button text', 'url' => '#' ] ],
		],
	],
);

// TODO Change block CSS class `acf-custom-block` to yours for further styling 
?>
<section class="<?php echo section_class( 'acf-custom-block', $block ); ?>">
	<?php
	/**
	 * Put your block content here
	 *
	 * @example $field = get_field('field_name');
	 */
	?>
	<InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"
	             template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>"
	             templateLock="all"
	/>
</section>