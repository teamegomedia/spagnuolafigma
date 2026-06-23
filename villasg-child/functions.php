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

    $theme_css_path = get_stylesheet_directory() . '/assets/css/theme.css';
    $theme_css_ver  = file_exists( $theme_css_path ) ? filemtime( $theme_css_path ) : wp_get_theme()->get('Version');

    wp_enqueue_style(
        'villasg-child-style',
        get_stylesheet_uri(),
        array('villasg-parent-style'),
        $theme_css_ver
    );

    wp_enqueue_style(
        'villasg-theme-style',
        get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array('villasg-child-style'),
        $theme_css_ver
    );

    $sticky_js_path = get_stylesheet_directory() . '/assets/js/sticky-pill.js';
    $sticky_js_ver  = file_exists( $sticky_js_path ) ? filemtime( $sticky_js_path ) : wp_get_theme()->get('Version');

    wp_enqueue_script(
        'villasg-sticky-pill',
        get_stylesheet_directory_uri() . '/assets/js/sticky-pill.js',
        array(),
        $sticky_js_ver,
        true
    );

    $slider_js_path = get_stylesheet_directory() . '/assets/js/testimonials-slider.js';
    $slider_js_ver  = file_exists( $slider_js_path ) ? filemtime( $slider_js_path ) : wp_get_theme()->get('Version');

    // Registered only; the shortcode enqueues it on demand.
    wp_register_script(
        'villasg-testimonials-slider',
        get_stylesheet_directory_uri() . '/assets/js/testimonials-slider.js',
        array(),
        $slider_js_ver,
        true
    );
}
add_action('wp_enqueue_scripts', 'villasg_child_enqueue_styles');

/**
 * Enqueue Google Fonts: Lora (Museo Sans è caricato via theme.json fontFace).
 */
function villasg_child_enqueue_fonts(): void
{
    wp_enqueue_style(
        'villasg-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&display=swap',
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

/**
 * Append featured image caption (from media library) under the post-featured-image block.
 * The native block doesn't render the caption: we hook into render output.
 */
function villasg_child_append_featured_caption( $block_content, $block ) {
    if ( ! is_singular( 'post' ) ) {
        return $block_content;
    }
    $thumb_id = get_post_thumbnail_id();
    if ( ! $thumb_id ) {
        return $block_content;
    }
    $caption = wp_get_attachment_caption( $thumb_id );
    if ( '' === (string) $caption ) {
        return $block_content;
    }
    $caption_html = '<figcaption class="vsg-blog-featured__caption">' . wp_kses_post( $caption ) . '</figcaption>';
    return $block_content . $caption_html;
}
add_filter( 'render_block_core/post-featured-image', 'villasg_child_append_featured_caption', 10, 2 );

/**
 * Register the "Testimonianza" custom post type and its category taxonomy.
 * The post title holds the citation (e.g. "Elena & Marc, Settembre 2023")
 * and the post content holds the quote text.
 */
function villasg_child_register_testimonianze(): void {
    register_post_type( 'testimonianza', array(
        'labels' => array(
            'name'               => __( 'Testimonianze', 'villasg-child' ),
            'singular_name'      => __( 'Testimonianza', 'villasg-child' ),
            'add_new'            => __( 'Aggiungi nuova', 'villasg-child' ),
            'add_new_item'       => __( 'Aggiungi nuova testimonianza', 'villasg-child' ),
            'edit_item'          => __( 'Modifica testimonianza', 'villasg-child' ),
            'new_item'           => __( 'Nuova testimonianza', 'villasg-child' ),
            'view_item'          => __( 'Vedi testimonianza', 'villasg-child' ),
            'search_items'       => __( 'Cerca testimonianze', 'villasg-child' ),
            'not_found'          => __( 'Nessuna testimonianza trovata', 'villasg-child' ),
            'menu_name'          => __( 'Testimonianze', 'villasg-child' ),
        ),
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-quote',
        'menu_position'      => 25,
        'supports'           => array( 'title', 'editor', 'page-attributes' ),
        'has_archive'        => false,
        'rewrite'            => false,
    ) );

    register_taxonomy( 'testimonianza_categoria', 'testimonianza', array(
        'labels' => array(
            'name'          => __( 'Categorie testimonianze', 'villasg-child' ),
            'singular_name' => __( 'Categoria testimonianza', 'villasg-child' ),
            'search_items'  => __( 'Cerca categorie', 'villasg-child' ),
            'all_items'     => __( 'Tutte le categorie', 'villasg-child' ),
            'edit_item'     => __( 'Modifica categoria', 'villasg-child' ),
            'update_item'   => __( 'Aggiorna categoria', 'villasg-child' ),
            'add_new_item'  => __( 'Aggiungi nuova categoria', 'villasg-child' ),
            'new_item_name' => __( 'Nome nuova categoria', 'villasg-child' ),
            'menu_name'     => __( 'Categorie', 'villasg-child' ),
        ),
        'public'            => false,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => false,
    ) );
}
add_action( 'init', 'villasg_child_register_testimonianze' );

/**
 * Shortcode [vsg_testimonianze] – renders the testimonials as a slider.
 *
 * Attributes:
 *   category="slug"   Limit to one or more category slugs (comma separated).
 *   limit="12"        Max number of testimonials (default 12, -1 for all).
 *   order="DESC"      ASC or DESC by menu_order then date.
 */
function villasg_child_testimonianze_shortcode( $atts ): string {
    $atts = shortcode_atts( array(
        'category' => '',
        'limit'    => 12,
        'order'    => 'DESC',
    ), $atts, 'vsg_testimonianze' );

    $query_args = array(
        'post_type'      => 'testimonianza',
        'post_status'    => 'publish',
        'posts_per_page' => (int) $atts['limit'],
        'orderby'        => array( 'menu_order' => 'ASC', 'date' => strtoupper( $atts['order'] ) === 'ASC' ? 'ASC' : 'DESC' ),
        'no_found_rows'  => true,
    );

    if ( '' !== trim( (string) $atts['category'] ) ) {
        $slugs = array_filter( array_map( 'sanitize_title', array_map( 'trim', explode( ',', $atts['category'] ) ) ) );
        if ( ! empty( $slugs ) ) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'testimonianza_categoria',
                    'field'    => 'slug',
                    'terms'    => $slugs,
                ),
            );
        }
    }

    $query = new WP_Query( $query_args );

    if ( ! $query->have_posts() ) {
        return '';
    }

    wp_enqueue_script( 'villasg-testimonials-slider' );

    $slides = '';
    while ( $query->have_posts() ) {
        $query->the_post();
        $cite  = get_the_title();
        $quote = trim( wp_strip_all_tags( get_the_content() ) );

        $slides .= '<div class="vsg-testimonials__slide" role="group" aria-roledescription="' . esc_attr__( 'testimonianza', 'villasg-child' ) . '">';
        $slides .= '<blockquote class="wp-block-quote vsg-testimonial">';
        $slides .= '<p class="has-quote-font-size" style="font-style:italic;font-weight:400">' . esc_html( $quote ) . '</p>';
        if ( '' !== $cite ) {
            $slides .= '<cite>— ' . esc_html( $cite ) . '</cite>';
        }
        $slides .= '</blockquote>';
        $slides .= '</div>';
    }
    wp_reset_postdata();

    $count = $query->post_count;

    $out  = '<div class="vsg-testimonials__slider" data-vsg-testimonials data-count="' . esc_attr( $count ) . '">';
    $out .= '<div class="vsg-testimonials__viewport">';
    $out .= '<div class="vsg-testimonials__track">' . $slides . '</div>';
    $out .= '</div>';
    $out .= '<div class="vsg-testimonials__controls" aria-hidden="true">';
    $out .= '<button type="button" class="vsg-testimonials__arrow vsg-testimonials__arrow--prev" aria-label="' . esc_attr__( 'Testimonianza precedente', 'villasg-child' ) . '">&#8592;</button>';
    $out .= '<div class="vsg-testimonials__dots"></div>';
    $out .= '<button type="button" class="vsg-testimonials__arrow vsg-testimonials__arrow--next" aria-label="' . esc_attr__( 'Testimonianza successiva', 'villasg-child' ) . '">&#8594;</button>';
    $out .= '</div>';
    $out .= '</div>';

    return $out;
}
add_shortcode( 'vsg_testimonianze', 'villasg_child_testimonianze_shortcode' );

/**
 * Shortcode [vsg_journal] – renders the latest blog posts as journal cards.
 * Uses WP_Query (not get_posts) so WPML language filtering applies at render time.
 *
 * Attributes:
 *   count="4"   Number of posts to display (default 4).
 */
function villasg_child_journal_shortcode( $atts ): string {
    $atts = shortcode_atts( array(
        'count' => 4,
    ), $atts, 'vsg_journal' );

    $theme = get_stylesheet_directory_uri();

    $query = new WP_Query( array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => (int) $atts['count'],
        'orderby'        => 'date',
        'order'          => 'DESC',
        'no_found_rows'  => true,
    ) );

    ob_start();
    ?>
    <div class="vsg-ispirazione__journal-wrap">
        <div class="vsg-ispirazione__journal">
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();
                    $vsg_thumb = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    if ( ! $vsg_thumb ) {
                        $vsg_thumb = $theme . '/assets/images/card-villa.jpg';
                    }
                    $vsg_excerpt = wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 28, '…' );
                ?>
                <a class="vsg-journal-card" href="<?php echo esc_url( get_permalink() ); ?>">
                    <span class="vsg-journal-card__media" style="background-image:url('<?php echo esc_url( $vsg_thumb ); ?>')" aria-hidden="true"></span>
                    <span class="vsg-journal-card__body">
                        <span class="vsg-journal-card__title"><?php echo esc_html( get_the_title() ); ?></span>
                        <span class="vsg-journal-card__excerpt"><?php echo esc_html( $vsg_excerpt ); ?></span>
                    </span>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <?php
                $vsg_placeholders = array(
                    array( 'gallery-1.jpg', 'Il segreto del Ponente', "Perché le coppie più raffinate scelgono la Riviera autentica." ),
                    array( 'gallery-2.jpg', 'Villa La Spagnuola', "Il gioiello nascosto riportato in vita dai Marchesi Gavotti." ),
                    array( 'gallery-3.jpg', 'Convivialità anziché folla', "Una nuova visione per i matrimoni in Italia." ),
                    array( 'gallery-4.jpg', 'Luxury Hidden', "Il movimento del lusso silenzioso nel Ponente Ligure." ),
                );
                foreach ( $vsg_placeholders as $vsg_pl ) : ?>
                <a class="vsg-journal-card" href="/figma/storie/">
                    <span class="vsg-journal-card__media" style="background-image:url('<?php echo esc_url( $theme . '/assets/images/' . $vsg_pl[0] ); ?>')" aria-hidden="true"></span>
                    <span class="vsg-journal-card__body">
                        <span class="vsg-journal-card__title"><?php echo esc_html( $vsg_pl[1] ); ?></span>
                        <span class="vsg-journal-card__excerpt"><?php echo esc_html( $vsg_pl[2] ); ?></span>
                    </span>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return (string) ob_get_clean();
}
add_shortcode( 'vsg_journal', 'villasg_child_journal_shortcode' );
