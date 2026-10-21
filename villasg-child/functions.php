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
    add_editor_style( array( 'assets/css/theme.css', 'assets/css/editor.css' ) );

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
 * Register the header navigation menu location.
 */
function villasg_child_register_menus(): void {
    register_nav_menus( array(
        'vsg-primary' => __( 'Menu principale (header)', 'villasg-child' ),
    ) );
}
add_action( 'after_setup_theme', 'villasg_child_register_menus' );

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

    // Pulsanti "Filled" da Figma ("Pulsanti e Link").
    register_block_style( 'core/button', array(
        'name'  => 'vsg-btn-light',
        'label' => __( 'Pieno chiaro', 'villasg-child' ),
    ) );
    register_block_style( 'core/button', array(
        'name'  => 'vsg-btn-dark',
        'label' => __( 'Pieno scuro', 'villasg-child' ),
    ) );
    register_block_style( 'core/button', array(
        'name'  => 'vsg-btn-text',
        'label' => __( 'Trasparente', 'villasg-child' ),
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

/**
 * Custom nav walker that reproduces the header markup classes
 * (vsg-nav-item, vsg-nav-item--has-children, vsg-nav-submenu) so the native
 * WordPress menu inherits the existing CSS without changes.
 */
class VSG_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="vsg-nav-submenu">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );

        if ( 0 === $depth ) {
            $li_class = 'vsg-nav-item' . ( $has_children ? ' vsg-nav-item--has-children' : '' );
            $output  .= '<li class="' . esc_attr( $li_class ) . '">';
        } else {
            $output .= '<li>';
        }

        $url   = ! empty( $item->url ) ? $item->url : '#';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $rel   = ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
        $target = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';

        $output .= '<a href="' . esc_url( $url ) . '"' . $target . $rel . '>' . esc_html( $title ) . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

/**
 * Shortcode [vsg_main_menu] – renders the header nav from the WP menu assigned
 * to the "vsg-primary" location, keeping the hamburger toggle and current style.
 */
function villasg_child_main_menu_shortcode(): string {
    ob_start();
    ?>
    <nav class="vsg-main-nav" aria-label="<?php esc_attr_e( 'Menu principale', 'villasg-child' ); ?>">
        <input type="checkbox" id="vsg-nav-toggle" class="vsg-nav-toggle-input" hidden>
        <label for="vsg-nav-toggle" class="vsg-nav-toggle" aria-label="<?php esc_attr_e( 'Apri menu', 'villasg-child' ); ?>">
            <span class="vsg-nav-icon" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </label>
        <?php
        if ( has_nav_menu( 'vsg-primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'vsg-primary',
                'container'      => false,
                'items_wrap'     => '<ul class="vsg-nav-list">%3$s</ul>',
                'fallback_cb'    => false,
                'walker'         => new VSG_Nav_Walker(),
                'depth'          => 2,
            ) );
        } else {
            echo '<ul class="vsg-nav-list"><li class="vsg-nav-item"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li></ul>';
        }
        ?>
    </nav>
    <?php
    $html = (string) ob_get_clean();
    // Collapse whitespace between tags so wpautop does not inject <br>/<p>.
    return (string) preg_replace( '/>\s+</', '><', $html );
}
add_shortcode( 'vsg_main_menu', 'villasg_child_main_menu_shortcode' );

/**
 * Shortcode [vsg_lang_switcher] – renders WPML language links keeping the
 * existing header style. Falls back to a static link if WPML is not active.
 */
function villasg_child_lang_switcher_shortcode(): string {
    $langs = apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) );

    $open  = '<div class="vsg-header-lang" aria-label="' . esc_attr__( 'Selettore lingua', 'villasg-child' ) . '">';
    $close = '</div>';

    if ( empty( $langs ) || ! is_array( $langs ) ) {
        return $open
            . '<a href="' . esc_url( home_url( '/' ) ) . '" class="vsg-lang vsg-lang--active" aria-current="page">IT</a>'
            . $close;
    }

    $items = array();
    foreach ( $langs as $lang ) {
        $code   = strtoupper( $lang['language_code'] );
        $active = ! empty( $lang['active'] );
        $class  = 'vsg-lang' . ( $active ? ' vsg-lang--active' : '' );
        $aria   = $active ? ' aria-current="page"' : '';
        $items[] = '<a href="' . esc_url( $lang['url'] ) . '" class="' . esc_attr( $class ) . '"' . $aria . '>' . esc_html( $code ) . '</a>';
    }

    return $open
        . implode( '<span class="vsg-lang-sep" aria-hidden="true">|</span>', $items )
        . $close;
}
add_shortcode( 'vsg_lang_switcher', 'villasg_child_lang_switcher_shortcode' );

/**
 * ============================================================
 * Sottotitolo articolo — campo custom (sostituisce l'excerpt)
 * ============================================================
 * Registra il meta `vsg_sottotitolo`, aggiunge un campo nell'editor
 * e lo rende disponibile ai Block Bindings (core/post-meta) usati nel
 * template single.html.
 */
function villasg_child_register_sottotitolo_meta(): void {
    register_post_meta( 'post', 'vsg_sottotitolo', array(
        'type'              => 'string',
        'single'            => true,
        'default'           => '',
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'auth_callback'     => function () {
            return current_user_can( 'edit_posts' );
        },
    ) );
}
add_action( 'init', 'villasg_child_register_sottotitolo_meta' );

/**
 * Meta box per inserire il sottotitolo (compatibile con l'editor a blocchi).
 */
function villasg_child_add_sottotitolo_metabox(): void {
    add_meta_box(
        'vsg_sottotitolo_box',
        __( 'Sottotitolo articolo', 'villasg-child' ),
        'villasg_child_render_sottotitolo_metabox',
        'post',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'villasg_child_add_sottotitolo_metabox' );

function villasg_child_render_sottotitolo_metabox( WP_Post $post ): void {
    $value = get_post_meta( $post->ID, 'vsg_sottotitolo', true );
    wp_nonce_field( 'vsg_sottotitolo_save', 'vsg_sottotitolo_nonce' );
    echo '<p><label for="vsg_sottotitolo_field" class="screen-reader-text">'
        . esc_html__( 'Sottotitolo', 'villasg-child' ) . '</label>';
    echo '<textarea id="vsg_sottotitolo_field" name="vsg_sottotitolo_field" rows="3" style="width:100%" '
        . 'placeholder="' . esc_attr__( 'Sottotitolo mostrato sotto il titolo', 'villasg-child' ) . '">'
        . esc_textarea( $value ) . '</textarea></p>';
    echo '<p class="description">'
        . esc_html__( "Sostituisce il riassunto come sottotitolo nell'header dell'articolo.", 'villasg-child' )
        . '</p>';
}

function villasg_child_save_sottotitolo_meta( int $post_id ): void {
    if ( ! isset( $_POST['vsg_sottotitolo_nonce'] )
        || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['vsg_sottotitolo_nonce'] ) ), 'vsg_sottotitolo_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    if ( isset( $_POST['vsg_sottotitolo_field'] ) ) {
        update_post_meta(
            $post_id,
            'vsg_sottotitolo',
            sanitize_text_field( wp_unslash( $_POST['vsg_sottotitolo_field'] ) )
        );
    }
}
add_action( 'save_post_post', 'villasg_child_save_sottotitolo_meta' );

/**
 * Register the "FAQ" custom post type and its category taxonomy.
 * The post title holds the question and the post content holds the answer.
 * Order follows menu_order, set by drag & drop in the admin list.
 */
function villasg_child_register_faq(): void {
    register_post_type( 'faq', array(
        'labels' => array(
            'name'               => __( 'FAQ', 'villasg-child' ),
            'singular_name'      => __( 'FAQ', 'villasg-child' ),
            'add_new'            => __( 'Aggiungi nuova', 'villasg-child' ),
            'add_new_item'       => __( 'Aggiungi nuova FAQ', 'villasg-child' ),
            'edit_item'          => __( 'Modifica FAQ', 'villasg-child' ),
            'new_item'           => __( 'Nuova FAQ', 'villasg-child' ),
            'view_item'          => __( 'Vedi FAQ', 'villasg-child' ),
            'search_items'       => __( 'Cerca FAQ', 'villasg-child' ),
            'not_found'          => __( 'Nessuna FAQ trovata', 'villasg-child' ),
            'menu_name'          => __( 'FAQ', 'villasg-child' ),
        ),
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-editor-help',
        'menu_position'      => 26,
        'supports'           => array( 'title', 'editor' ),
        'has_archive'        => false,
        'rewrite'            => false,
    ) );

    register_taxonomy( 'faq_categoria', 'faq', array(
        'labels' => array(
            'name'          => __( 'Categorie FAQ', 'villasg-child' ),
            'singular_name' => __( 'Categoria FAQ', 'villasg-child' ),
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
add_action( 'init', 'villasg_child_register_faq' );

/**
 * FAQ list in admin: drag & drop ordering.
 * The list is sorted by menu_order like the front end and shows every FAQ on one page;
 * dragging a row saves the new order via AJAX. Filter by category to order one group.
 */
function villasg_child_faq_admin_order( WP_Query $query ): void {
    if ( ! is_admin() || ! $query->is_main_query() || 'faq' !== $query->get( 'post_type' ) || $query->get( 'orderby' ) ) {
        return;
    }
    $query->set( 'orderby', array( 'menu_order' => 'ASC', 'date' => 'DESC' ) );
}
add_action( 'pre_get_posts', 'villasg_child_faq_admin_order' );

// All FAQ on one page, otherwise rows can't be dragged across pages.
add_filter( 'edit_faq_per_page', function () { return 500; } );

function villasg_child_faq_admin_columns( array $columns ): array {
    return array_merge( array( 'vsg_drag' => '<span class="screen-reader-text">' . esc_html__( 'Ordina', 'villasg-child' ) . '</span>' ), $columns );
}
add_filter( 'manage_faq_posts_columns', 'villasg_child_faq_admin_columns' );

function villasg_child_faq_admin_column_value( string $column, int $post_id ): void {
    if ( 'vsg_drag' === $column ) {
        echo '<span class="dashicons dashicons-menu vsg-faq-drag" title="' . esc_attr__( 'Trascina per ordinare', 'villasg-child' ) . '"></span>';
    }
}
add_action( 'manage_faq_posts_custom_column', 'villasg_child_faq_admin_column_value', 10, 2 );

// Category filter above the list.
function villasg_child_faq_category_filter( string $post_type ): void {
    if ( 'faq' !== $post_type ) {
        return;
    }
    wp_dropdown_categories( array(
        'taxonomy'        => 'faq_categoria',
        'name'            => 'faq_categoria',
        'value_field'     => 'slug',
        'selected'        => isset( $_GET['faq_categoria'] ) ? sanitize_title( wp_unslash( $_GET['faq_categoria'] ) ) : '',
        'show_option_all' => __( 'Tutte le categorie', 'villasg-child' ),
        'hide_empty'      => false,
        'hierarchical'    => true,
    ) );
}
add_action( 'restrict_manage_posts', 'villasg_child_faq_category_filter' );

function villasg_child_faq_sortable_assets( string $hook ): void {
    $screen = get_current_screen();
    if ( 'edit.php' !== $hook || ! $screen || 'faq' !== $screen->post_type ) {
        return;
    }
    // Sorting by a column header or searching gives a list in another order: no dragging there.
    if ( isset( $_GET['orderby'] ) || ! empty( $_GET['s'] ) ) {
        return;
    }
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_add_inline_script( 'jquery-ui-sortable', 'window.vsgFaqSort=' . wp_json_encode( array(
        'ajax'  => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'vsg_faq_reorder' ),
        'saved' => __( 'Ordine salvato', 'villasg-child' ),
        'error' => __( 'Ordine non salvato, ricarica la pagina', 'villasg-child' ),
        'hint'  => __( 'Trascina le righe per cambiare l\'ordine in cui le FAQ compaiono sul sito.', 'villasg-child' ),
    ) ) . ';' . <<<'JS'
jQuery(function ($) {
  var $list = $('#the-list');
  if (!$list.length || !$list.find('tr[id^="post-"]').length) return;
  var $msg = $('<p class="vsg-faq-sort-msg"></p>').text(vsgFaqSort.hint);
  $('.wp-header-end').after($msg);
  $list.sortable({
    items: 'tr[id^="post-"]',
    handle: '.vsg-faq-drag, .column-title',
    axis: 'y',
    distance: 5,
    cursor: 'grabbing',
    placeholder: 'vsg-faq-placeholder',
    helper: function (e, tr) {
      var $cells = tr.children();
      return tr.clone().children().each(function (i) { $(this).width($cells.eq(i).width()); }).end();
    },
    start: function (e, ui) { ui.placeholder.html('<td colspan="' + ui.item.children().length + '"></td>'); },
    update: function () {
      var ids = $list.find('tr[id^="post-"]').map(function () { return this.id.replace('post-', ''); }).get();
      $msg.text('…');
      $.post(vsgFaqSort.ajax, { action: 'vsg_faq_reorder', nonce: vsgFaqSort.nonce, ids: ids })
        .done(function (r) { $msg.text(r && r.success ? vsgFaqSort.saved : vsgFaqSort.error); })
        .fail(function () { $msg.text(vsgFaqSort.error); });
    }
  });
});
JS
    );
    wp_add_inline_style( 'list-tables', '
        .post-type-faq .column-vsg_drag{width:28px}
        .post-type-faq .vsg-faq-drag{cursor:grab;color:#8c8f94}
        .post-type-faq #the-list .column-title{cursor:grab}
        .post-type-faq .vsg-faq-placeholder td{height:44px;background:#f0f6fc;border:1px dashed #72aee6}
        .post-type-faq .ui-sortable-helper{background:#fff;box-shadow:0 4px 12px rgba(0,0,0,.15);display:table}
        .vsg-faq-sort-msg{margin:8px 0 0;color:#646970}
    ' );
}
add_action( 'admin_enqueue_scripts', 'villasg_child_faq_sortable_assets' );

function villasg_child_faq_reorder_ajax(): void {
    check_ajax_referer( 'vsg_faq_reorder', 'nonce' );
    if ( ! current_user_can( 'edit_posts' ) ) {
        wp_send_json_error( null, 403 );
    }
    $ids = isset( $_POST['ids'] ) ? array_map( 'absint', (array) wp_unslash( $_POST['ids'] ) ) : array();
    global $wpdb;
    foreach ( array_values( array_filter( $ids ) ) as $i => $id ) {
        if ( 'faq' === get_post_type( $id ) && current_user_can( 'edit_post', $id ) ) {
            $wpdb->update( $wpdb->posts, array( 'menu_order' => $i + 1 ), array( 'ID' => $id ) );
            clean_post_cache( $id );
        }
    }
    wp_send_json_success();
}
add_action( 'wp_ajax_vsg_faq_reorder', 'villasg_child_faq_reorder_ajax' );

// A new FAQ goes to the bottom of the list instead of the top.
function villasg_child_faq_new_at_bottom( array $data, array $postarr ): array {
    if ( 'faq' === $data['post_type'] && empty( $postarr['ID'] ) && empty( $data['menu_order'] ) ) {
        global $wpdb;
        $data['menu_order'] = 1 + (int) $wpdb->get_var( "SELECT MAX(menu_order) FROM {$wpdb->posts} WHERE post_type = 'faq'" );
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'villasg_child_faq_new_at_bottom', 10, 2 );

/**
 * Categorie FAQ in admin: a "Shortcode" column with the ready-to-paste code.
 */
function villasg_child_faq_term_columns( array $columns ): array {
    $columns['vsg_shortcode'] = __( 'Shortcode', 'villasg-child' );
    return $columns;
}
add_filter( 'manage_edit-faq_categoria_columns', 'villasg_child_faq_term_columns' );

function villasg_child_faq_term_column_value( string $content, string $column, int $term_id ): string {
    if ( 'vsg_shortcode' !== $column ) {
        return $content;
    }
    $term = get_term( $term_id, 'faq_categoria' );
    if ( ! $term || is_wp_error( $term ) ) {
        return $content;
    }
    return '<code style="user-select:all">[vsg_faq category="' . esc_html( $term->slug ) . '"]</code>';
}
add_filter( 'manage_faq_categoria_custom_column', 'villasg_child_faq_term_column_value', 10, 3 );

/**
 * Shortcode [vsg_faq] – renders FAQ as an accordion (native <details>, no JS).
 *
 * Attributes:
 *   category="slug"   Limit to one or more category slugs (comma separated).
 *   limit="-1"        Max number of FAQ (default -1 = all).
 *   open="none"       "first" to open the first answer on load.
 *   multiple="no"     "yes" lets several answers stay open at once.
 *   schema="yes"      "no" to leave these FAQ out of the FAQPage JSON-LD.
 */
function villasg_child_faq_shortcode( $atts ): string {
    static $instance = 0;
    $instance++;

    $atts = shortcode_atts( array(
        'category' => '',
        'limit'    => -1,
        'open'     => 'none',
        'multiple' => 'no',
        'schema'   => 'yes',
    ), $atts, 'vsg_faq' );

    $query_args = array(
        'post_type'      => 'faq',
        'post_status'    => 'publish',
        'posts_per_page' => (int) $atts['limit'],
        'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
        'no_found_rows'  => true,
    );

    if ( '' !== trim( (string) $atts['category'] ) ) {
        $slugs = array_filter( array_map( 'sanitize_title', array_map( 'trim', explode( ',', $atts['category'] ) ) ) );
        if ( ! empty( $slugs ) ) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'faq_categoria',
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

    // Same name on every <details> = only one open at a time (native exclusive accordion).
    $name_attr = 'yes' === strtolower( (string) $atts['multiple'] ) ? '' : ' name="vsg-faq-' . $instance . '"';
    $open_first = 'first' === strtolower( (string) $atts['open'] );
    $add_schema = 'no' !== strtolower( (string) $atts['schema'] );

    $items = '';
    $index = 0;
    while ( $query->have_posts() ) {
        $query->the_post();
        $question = get_the_title();
        $answer   = apply_filters( 'the_content', get_the_content() );

        $items .= '<details class="vsg-faq__item"' . $name_attr . ( $open_first && 0 === $index ? ' open' : '' ) . '>';
        $items .= '<summary class="vsg-faq__question">' . esc_html( $question ) . '</summary>';
        $items .= '<div class="vsg-faq__answer">' . wp_kses_post( $answer ) . '</div>';
        $items .= '</details>';

        if ( $add_schema ) {
            villasg_child_faq_schema_collect( get_the_ID(), $question, $answer );
        }
        $index++;
    }
    wp_reset_postdata();

    // No whitespace between tags: wpautop would add <br>/<p> inside template parts.
    return '<div class="vsg-faq">' . $items . '</div>';
}
add_shortcode( 'vsg_faq', 'villasg_child_faq_shortcode' );

/**
 * Collect the FAQ rendered on the page; printed once as a single FAQPage
 * JSON-LD in the footer, even with several [vsg_faq] on the same page.
 */
function villasg_child_faq_schema_collect( ?int $post_id = null, string $question = '', string $answer = '' ): array {
    static $entities = array();
    if ( null !== $post_id && ! isset( $entities[ $post_id ] ) ) {
        $entities[ $post_id ] = array(
            '@type'          => 'Question',
            'name'           => wp_strip_all_tags( $question ),
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => trim( wp_kses( $answer, array( 'a' => array( 'href' => true ), 'br' => array(), 'p' => array(), 'ul' => array(), 'ol' => array(), 'li' => array(), 'strong' => array(), 'em' => array() ) ) ),
            ),
        );
    }
    return $entities;
}

function villasg_child_faq_schema_print(): void {
    $entities = villasg_child_faq_schema_collect();
    if ( empty( $entities ) ) {
        return;
    }
    $data = array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_values( $entities ),
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_footer', 'villasg_child_faq_schema_print' );

/**
 * Contact lightbox: a <dialog> with WhatsApp and the CF7 form, printed in the footer.
 * Any link to "#contatti" (e.g. a CONTATTACI button with that URL) opens it;
 * without JS the link just does nothing harmful.
 */
const VILLASG_CHILD_WHATSAPP = '+39 337 125 6193';
const VILLASG_CHILD_CONTACT_FORM_ID = 595; // CF7 "Modulo generico ITA"

function villasg_child_contact_dialog(): void {
    if ( is_admin() || ! shortcode_exists( 'contact-form-7' ) ) {
        return;
    }
    // WPML: use the translated form when it exists, otherwise the Italian one.
    $form_id = (int) apply_filters( 'wpml_object_id', VILLASG_CHILD_CONTACT_FORM_ID, 'wpcf7_contact_form', true );
    // No CF7 autop here: its <p>/<br> would break the .fields grid of theme.css.
    add_filter( 'wpcf7_autop_or_not', '__return_false' );
    $form    = do_shortcode( '[contact-form-7 id="' . $form_id . '"]' );
    remove_filter( 'wpcf7_autop_or_not', '__return_false' );
    $wa_url  = 'https://wa.me/' . preg_replace( '/\D/', '', VILLASG_CHILD_WHATSAPP );

    $out  = '<dialog class="vsg-contact-dialog" id="vsg-contact-dialog" aria-labelledby="vsg-contact-dialog-title">';
    $out .= '<div class="vsg-contact-dialog__inner">';
    $out .= '<button type="button" class="vsg-contact-dialog__close" data-vsg-contact-close aria-label="' . esc_attr__( 'Chiudi', 'villasg-child' ) . '"></button>';
    $out .= '<p class="vsg-overline has-small-caps-font-size">' . esc_html__( 'Contattaci', 'villasg-child' ) . '</p>';
    $out .= '<h2 class="vsg-contact-dialog__title" id="vsg-contact-dialog-title">' . esc_html__( 'Parliamo del vostro matrimonio', 'villasg-child' ) . '</h2>';
    $out .= '<div class="vsg-contact-dialog__whatsapp">';
    $out .= '<p>' . esc_html__( 'Scriveteci su WhatsApp', 'villasg-child' ) . '<br><a class="vsg-contact-dialog__number" href="' . esc_url( $wa_url ) . '" target="_blank" rel="noopener">' . esc_html( VILLASG_CHILD_WHATSAPP ) . '</a></p>';
    $out .= '<div class="wp-block-button is-style-vsg-btn-dark"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $wa_url ) . '" target="_blank" rel="noopener">' . esc_html__( 'Apri WhatsApp', 'villasg-child' ) . '</a></div>';
    $out .= '</div>';
    $out .= '<p class="vsg-contact-dialog__or"><span>' . esc_html__( 'oppure compilate il modulo', 'villasg-child' ) . '</span></p>';
    $out .= '<div class="vsg-contact-dialog__form">' . $form . '</div>';
    $out .= '</div>';
    $out .= '</dialog>';

    echo $out; // phpcs:ignore WordPress.Security.EscapeOutput -- escaped above, $form is CF7 output.
}
add_action( 'wp_footer', 'villasg_child_contact_dialog', 5 );

function villasg_child_enqueue_contact_dialog(): void {
    $path = get_stylesheet_directory() . '/assets/js/contact-dialog.js';
    wp_enqueue_script(
        'villasg-contact-dialog',
        get_stylesheet_directory_uri() . '/assets/js/contact-dialog.js',
        array(),
        file_exists( $path ) ? filemtime( $path ) : wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'villasg_child_enqueue_contact_dialog' );
