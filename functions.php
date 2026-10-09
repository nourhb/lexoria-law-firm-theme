<?php
/**
 * Lexoria theme setup.
 *
 * @package Lexoria
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LEXORIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function lexoria_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'lexoria' ),
			'footer'  => esc_html__( 'Footer', 'lexoria' ),
		)
	);

	load_theme_textdomain( 'lexoria', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'lexoria_setup' );

/**
 * Footer widget area.
 */
function lexoria_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'lexoria' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'lexoria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'lexoria_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function lexoria_enqueue_assets() {
	wp_enqueue_style( 'lexoria-style', get_stylesheet_uri(), array(), LEXORIA_VERSION );
	wp_enqueue_script( 'lexoria-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), LEXORIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'lexoria_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function lexoria_enqueue_editor_assets() {
	wp_enqueue_style( 'lexoria-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), LEXORIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'lexoria_enqueue_editor_assets' );

/**
 * Register the Lexoria pattern category.
 */
function lexoria_register_pattern_category() {
	register_block_pattern_category(
		'lexoria',
		array( 'label' => esc_html__( 'Lexoria', 'lexoria' ) )
	);
}
add_action( 'init', 'lexoria_register_pattern_category' );

/**
 * Custom block styles.
 */
function lexoria_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'gold-outline', 'label' => esc_html__( 'Gold Outline', 'lexoria' ) ) );
	register_block_style( 'core/group', array( 'name' => 'attorney-card', 'label' => esc_html__( 'Attorney Card', 'lexoria' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'lexoria' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'gold-rule', 'label' => esc_html__( 'Gold Rule', 'lexoria' ) ) );
}
add_action( 'init', 'lexoria_register_block_styles' );

/**
 * Custom excerpt length.
 */
function lexoria_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'lexoria_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function lexoria_icon( $name ) {
	$icons = array(
		'scale'  => '<path d="M12 3v18M5 7l7-4 7 4M5 7l-3 7a4 4 0 0 0 6 0L5 7zM19 7l-3 7a4 4 0 0 0 6 0l-3-7zM8 21h8"/>',
		'gavel'  => '<path d="M14 13l-7.5 7.5a2.1 2.1 0 0 1-3-3L11 10M16 16l6-6M8 8l6-6M9 7l8 8M13 3l4 4"/>',
		'shield' => '<path d="M12 22s8-3.6 8-10V5l-8-3-8 3v7c0 6.4 8 10 8 10z"/>',
		'doc'    => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/>',
		'phone'  => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'   => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'    => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'  => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'check'  => '<path d="M20 6L9 17l-5-5"/>',
		'quote'  => '<path d="M10 8c-3 1-5 3.5-5 7v1h5v-6H7.5C8 9 9 8.5 10 8.2V8zm9 0c-3 1-5 3.5-5 7v1h5v-6h-2.5c.5-1 1.5-1.5 2.5-1.8V8z"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
