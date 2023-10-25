<?php

//======================================================================
// GUTENBERG SETUP
//======================================================================

define( 'BLOCK_NAMESPACE', 'custom-theme' );

// Disable gutenberg
//add_filter('use_block_editor_for_post_type', '__return_false');
// Disables the block editor from managing widgets in the Gutenberg plugin.
//add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
//add_filter( 'use_widgets_block_editor', '__return_false' );

// Enable support to full width block 
add_theme_support( 'align-wide' );

/**
 * Replace default gutenberg color palette with theme colors
 */
function replace_default_gutenberg_colors() {
	add_theme_support( 'disable-custom-gradients' );
	add_theme_support( 'editor-gradient-presets', [] );

	// Custom theme colors
	add_theme_support( 'editor-color-palette', get_theme_colors() );
}

add_action( 'after_setup_theme', 'replace_default_gutenberg_colors', 10 );

//======================================================================
// GUTENBERG BLOCKS
//======================================================================
function gb_blocks_scripts_and_styles() {
	wp_register_style( 'fw-gutenberg-editor-style', get_stylesheet_directory_uri() . '/assets/css/admin.css', [], '1.0.0' );
}

add_action( 'init', 'gb_blocks_scripts_and_styles' );

/**
 * ACF Gutenberg blocks
 */
function register_custom_acf_blocks() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {
		
		// See icons here - https://developer.wordpress.org/resource/dashicons
		$blocks = [
			[
				'name'  => 'acf-sample',
				'title' => __( 'ACF Sample block', 'default' ),
				'icon'  => 'screenoptions',
			],
			[
				'name'     => 'acf-advanced',
				'title'    => __( 'ACF with inner blocks', 'default' ),
				'icon'     => 'screenoptions',
				'mode'     => 'preview',
				'supports' => [ 'jsx' => true, 'mode' => false ],
			],
		];
		
		foreach ( $blocks as $block ) {
			$block_args = array(
				'render_template' => "parts/blocks/{$block['name']}.php",
				'category'        => 'design',
				'mode'            => 'auto',
				'align'           => 'full',
				'enqueue_assets'  => function () {
					if ( is_admin() ) {
						wp_enqueue_style( 'fw-gutenberg-editor-style' );
					}
				},
			);
			$block_args = wp_parse_args( $block, $block_args );

			acf_register_block_type( $block_args );
		}
	}
}

add_action( 'acf/init', 'register_custom_acf_blocks' );