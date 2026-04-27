<?php
/**
 * Title: Due Destinazioni – Colonne Fullscreen
 * Slug: villasg-child/cards-two
 * Categories: villasg-sections
 * Description: 2-column fullscreen events section – Figma FullscreenSection.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:html -->
<div class="vsg-events-split">
  <div class="vsg-event-col vsg-event-left">
    <img class="vsg-event-bg" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-eleganti.jpg" alt="Giardini sul mare per eventi eleganti alla Villa La Spagnuola Gavotti" loading="lazy" />
    <span class="vsg-event-overlay" aria-hidden="true"></span>
    <div class="vsg-event-inner">
      <p class="vsg-event-label">L'estetica dell'esclusività</p>
      <h2 class="vsg-event-heading">Eventi Eleganti</h2>
      <p class="vsg-event-desc">Dalle cene di gala ai ricevimenti privati. Saloni affrescati e giardini sul mare per accogliere fino a 250 ospiti in una cornice senza tempo.</p>
      <a href="/eventi-eleganti" class="vsg-cta-btn vsg-cta-btn--white">Scopri di più →</a>
    </div>
  </div>
  <div class="vsg-event-col vsg-event-right">
    <img class="vsg-event-bg" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-aziendali.jpg" alt="Villa La Spagnuola Gavotti per eventi aziendali di prestigio" loading="lazy" />
    <span class="vsg-event-overlay vsg-event-overlay--teal" aria-hidden="true"></span>
    <div class="vsg-event-inner">
      <p class="vsg-event-label">Prestigio e visione</p>
      <h2 class="vsg-event-heading">Eventi Aziendali</h2>
      <p class="vsg-event-desc">Convention, offsite e presentazioni. Un contesto autorevole dove la storia del XVI secolo ispira i vostri traguardi futuri.</p>
      <a href="/eventi-aziendali" class="vsg-cta-btn vsg-cta-btn--white">Scopri di più →</a>
    </div>
  </div>
</div>
<!-- /wp:html -->
