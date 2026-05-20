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
