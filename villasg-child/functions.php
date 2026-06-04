<?php

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Load parent and child styles.
 */
function villasg_child_enqueue_styles(): void
{
    $parent = wp_get_theme(get_template());

    wp_enqueue_style(
        'villasg-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        is_object($parent) ? $parent->get('Version') : null
    );

    wp_enqueue_style(
        'villasg-child-style',
        get_stylesheet_uri(),
        array('villasg-parent-style'),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'villasg-theme-style',
        get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array('villasg-child-style'),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'villasg-sticky-pill',
        get_stylesheet_directory_uri() . '/assets/js/sticky-pill.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'villasg_child_enqueue_styles');

/**
 * Enqueue Google Fonts: Lora + Figtree.
 */
function villasg_child_enqueue_fonts(): void
{
    wp_enqueue_style(
        'villasg-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&family=Figtree:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'villasg_child_enqueue_fonts');
add_action('enqueue_block_editor_assets', 'villasg_child_enqueue_fonts');

/**
 * Gutenberg setup for pattern organization and editor parity.
 */
function villasg_child_setup(): void
{
    add_editor_style('assets/css/editor.css');

    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'villasg-sections',
            array('label' => __('Villa SG – Sezioni', 'villasg-child'))
        );
        register_block_pattern_category(
            'villasg-matrimoni',
            array('label' => __('Villa SG – Matrimoni', 'villasg-child'))
        );
        register_block_pattern_category(
            'villasg-home',
            array('label' => __('Villa SG – Home', 'villasg-child'))
        );
        register_block_pattern_category(
            'villasg-mare',
            array('label' => __('Villa SG – Matrimoni Mare', 'villasg-child'))
        );
        register_block_pattern_category(
            'villasg-blog',
            array('label' => __('Villa SG – Blog', 'villasg-child'))
        );
    }
}
add_action('after_setup_theme', 'villasg_child_setup');

/**
 * Replace breadcrumb placeholder in single.html with the real post title.
 * The template contains the literal string "Articolo corrente" which we
 * substitute on the fly when viewing a single post.
 */
function villasg_child_breadcrumb_post_title( $block_content, $block ) {
    if ( ! is_singular( 'post' ) ) {
        return $block_content;
    }
    if ( false === strpos( $block_content, 'vsg-blog-breadcrumb' ) ) {
        return $block_content;
    }
    $title = get_the_title();
    if ( '' === $title ) {
        return $block_content;
    }
    return str_replace( 'Articolo corrente', esc_html( $title ), $block_content );
}
add_filter( 'render_block_core/paragraph', 'villasg_child_breadcrumb_post_title', 10, 2 );

/**
 * Register block styles available in the editor.
 */
function villasg_child_register_block_styles(): void {
    if ( ! function_exists( 'register_block_style' ) ) {
        return;
    }
    register_block_style( 'core/paragraph', array(
        'name'  => 'lead',
        'label' => __( 'Testo in evidenza', 'villasg-child' ),
    ) );
}
add_action( 'init', 'villasg_child_register_block_styles' );
