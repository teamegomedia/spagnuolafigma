<?php
/**
 * Title: Gallery Strip – Istantanee
 * Slug: villasg-child/gallery-strip
 * Categories: villasg-sections
 * Description: Istantanee section: heading + 5-photo strip + CTA – Figma 671:8485.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-gallery-section","style":{"color":{"background":"#f8f6f4"},"border":{"top":{"color":"#d8cfc4","width":"1px"}},"spacing":{"padding":{"top":"5rem","bottom":"3rem","left":"clamp(1.5rem, 3vw, 3rem)","right":"clamp(1.5rem, 3vw, 3rem)"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<!-- wp:heading {"level":2,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"clamp(2rem, 3vw, 3rem)","lineHeight":"1.25"},"color":{"text":"#17334a"},"spacing":{"margin":{"bottom":"2.5rem"}}},"fontFamily":"lora"} -->
<h2 class="wp-block-heading has-text-color has-lora-font-family" style="color:#17334a;font-size:clamp(2rem, 3vw, 3rem);font-weight:400;line-height:1.25;margin-bottom:2.5rem">Istantanee</h2>
<!-- /wp:heading -->
<!-- /wp:group -->
<!-- wp:html -->
<div class="vsg-gallery-strip">
  <div class="vsg-gallery-inner" role="list" aria-label="<?php esc_attr_e( 'Galleria fotografica Villa Spagnuola Gavotti', 'villasg-child' ); ?>">
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt="<?php esc_attr_e( 'Addobbi floreali e luci per la cerimonia', 'villasg-child' ); ?>" loading="lazy" role="listitem" />
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt="<?php esc_attr_e( 'Arco di fiori bianchi per il matrimonio', 'villasg-child' ); ?>" loading="lazy" role="listitem" />
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt="<?php esc_attr_e( 'Giardino con palme al tramonto', 'villasg-child' ); ?>" loading="lazy" role="listitem" />
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt="<?php esc_attr_e( 'Allestimento luminoso per la serata', 'villasg-child' ); ?>" loading="lazy" role="listitem" />
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-5.jpg" alt="<?php esc_attr_e( 'Ospiti durante il ricevimento in villa', 'villasg-child' ); ?>" loading="lazy" role="listitem" />
  </div>
</div>
<!-- /wp:html -->
<!-- wp:group {"align":"full","className":"vsg-gallery-cta","style":{"color":{"background":"#f8f6f4"},"spacing":{"padding":{"top":"1.5rem","bottom":"3rem","left":"clamp(1.5rem, 3vw, 3rem)","right":"clamp(1.5rem, 3vw, 3rem)"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<!-- wp:paragraph {"align":"right","className":"vsg-gallery-explore","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"0.875rem","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#17334a"}}} -->
<p class="has-text-align-right vsg-gallery-explore has-text-color" style="color:#17334a;font-size:0.875rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><a href="/gallery">Esplora la gallery <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:paragraph -->
<!-- /wp:group -->
