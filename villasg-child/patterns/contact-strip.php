<?php
/**
 * Title: Storia della Villa – Testo e Immagine
 * Slug: villasg-child/contact-strip
 * Categories: villasg-sections
 * Description: Storia section: testo sx + collage Figma dx – Figma 671:8484.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-storia","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"clamp(1.5rem, 3vw, 3rem)","right":"clamp(1.5rem, 3vw, 3rem)"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<!-- wp:html -->
<div class="vsg-storia-layout">
  <div class="vsg-storia-text">
    <p class="vsg-storia-overline">La storia della villa</p>
    <h2 class="vsg-storia-heading">Mezzo millennio<br>di <em>storia</em></h2>
    <p class="vsg-storia-desc">Nata come torre di avvistamento per difendere la costa dalle incursioni dei pirati turchi, la fortezza si è evoluta nei secoli in palazzo gentilizio.</p>
    <p class="vsg-storia-desc">Una dimora d'epoca che ha ospitato il Vicerè di Napoli e Napoleone, oggi trasformata in una residenza di rara eleganza. I saloni nobiliari affrescati nell'Ottocento e i giardini terrazzati offrono una cornice d'eccezione, sospesa sulla riva del mare.</p>
    <a href="/storia" class="vsg-cta-btn vsg-cta-btn--brand">Scopri di più →</a>
  </div>
  <figure class="vsg-storia-collage">
    <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/storia-collage.jpg" alt="<?php esc_attr_e( 'Documenti, stampe e ritratti storici della Villa Spagnuola Gavotti', 'villasg-child' ); ?>" loading="lazy" />
  </figure>
</div>
<!-- /wp:html -->
<!-- /wp:group -->
