<?php
/**
 * znazz75 — theme functions and definitions.
 *
 * @package znazz75
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ZNAZZ75_VERSION', '1.0.1' );

/**
 * Theme setup.
 */
function znazz75_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-units', array( 'px', 'em', 'rem', 'vh', 'vw', '%' ) );
	add_theme_support( 'link-color' );
	add_theme_support( 'align-wide' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' )
	);

	// Editor stylesheet (mirrors the custom.css tweaks inside the editor).
	add_editor_style( 'assets/css/editor.css' );

	// Pattern category used by the bundled patterns.
	register_block_pattern_category(
		'znazz75',
		array( 'label' => __( 'znazz75', 'znazz75' ) )
	);
}
add_action( 'after_setup_theme', 'znazz75_setup' );

/**
 * Typography note: this theme intentionally does NOT enqueue any remote
 * font (e.g. Google Fonts). "Body", "Display" and "Mono" in theme.json all
 * resolve to system font stacks (Segoe UI / San Francisco / Inter-class
 * fonts already installed on most devices, falling back to system-ui).
 * That keeps the theme fast, avoids a third-party network request on every
 * page view, and sidesteps the GDPR/DSGVO concerns raised in Germany around
 * Google Fonts' default CDN loading (LG München, judgment of 20.01.2022,
 * 3 O 17493/20). See "Self-hosted Google Fonts" in readme.txt if you want
 * to add a specific webfont later — self-host it rather than linking to
 * Google's CDN directly.
 */

/**
 * Enqueue the theme stylesheet layered on top of theme.json.
 */
function znazz75_scripts() {
	wp_enqueue_style(
		'znazz75-style',
		get_theme_file_uri( 'assets/css/custom.css' ),
		array(),
		ZNAZZ75_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'znazz75_scripts' );
add_action( 'enqueue_block_editor_assets', 'znazz75_scripts' );

/**
 * Register custom block styles.
 */
function znazz75_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill', 'znazz75' ),
		)
	);
	register_block_style(
		'core/post-terms',
		array(
			'name'  => 'chip',
			'label' => __( 'Chip', 'znazz75' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'card',
			'label' => __( 'Card', 'znazz75' ),
		)
	);
	register_block_style(
		'core/columns',
		array(
			'name'  => 'card',
			'label' => __( 'Card', 'znazz75' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'znazz75' ),
		)
	);
	register_block_style(
		'core/quote',
		array(
			'name'  => 'plain',
			'label' => __( 'Plain', 'znazz75' ),
		)
	);
}
add_action( 'init', 'znazz75_block_styles' );
