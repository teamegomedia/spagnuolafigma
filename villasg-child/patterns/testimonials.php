<?php
/**
 * Title: Soggiorni – Testo e Immagine
 * Slug: villasg-child/testimonials
 * Categories: villasg-sections
 * Description: Soggiorni section: collage Figma sx + testo dx – Figma 671:8483.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-soggiorni","style":{"color":{"background":"#f8f6f4"},"border":{"top":{"color":"#d8cfc4","width":"1px"},"bottom":{"color":"#d8cfc4","width":"1px"}},"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"clamp(1.5rem, 3vw, 3rem)","right":"clamp(1.5rem, 3vw, 3rem)"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<!-- wp:html -->
<div class="vsg-soggiorni-layout">
  <figure class="vsg-soggiorni-collage">
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/soggiorni-collage.jpg" alt="<?php esc_attr_e( 'Foresterie della Villa: vista mare, terrazza panoramica e camera elegante', 'villasg-child' ); ?>" loading="lazy" />
  </figure>
  <div class="vsg-soggiorni-text">
    <p class="vsg-soggiorni-overline">Soggiornare alla Spagnuola</p>
    <h2 class="vsg-soggiorni-heading">L'arte della<br><em>villeggiatura</em></h2>
    <p class="vsg-soggiorni-desc">L'esperienza di vivere la Riviera negli appartamenti delle Foresterie dei Marchesi Gavotti.</p>
    <p class="vsg-soggiorni-desc">Comfort contemporaneo immerso in un parco del XVI secolo, con il privilegio della spiaggia privata a pochi passi. Il ritiro perfetto per il vostro relax o lo smart working sul mare.</p>
    <a href="/soggiorni" class="vsg-cta-btn vsg-cta-btn--brand">Scopri di più →</a>
  </div>
</div>
<!-- /wp:html -->
<!-- /wp:group -->
