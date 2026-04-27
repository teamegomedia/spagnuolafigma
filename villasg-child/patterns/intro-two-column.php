<?php
/**
 * Title: Ambienti – Info Card
 * Slug: villasg-child/intro-two-column
 * Categories: villasg-sections
 * Description: 4-card environment section – Figma NormalContentWidth (Info Card).
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-ambienti","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"clamp(1.5rem, 3vw, 3rem)","right":"clamp(1.5rem, 3vw, 3rem)"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<!-- wp:group {"className":"vsg-ambienti-header","style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"672px","justifyContent":"center"}} -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"0.875rem","letterSpacing":"0.2em","textTransform":"uppercase"},"color":{"text":"#005d72"}}} -->
<p class="has-text-align-center has-text-color" style="color:#005d72;font-size:0.875rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase">L'estetica dell'esclusività</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"clamp(2rem, 3vw + 0.5rem, 3rem)","lineHeight":"1.25"},"color":{"text":"#17334a"}},"fontFamily":"lora"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-lora-font-family vsg-ambienti-h2" style="color:#17334a;font-size:clamp(2rem, 3vw + 0.5rem, 3rem);font-weight:400;line-height:1.25">Ambienti che ispirano<br><em>meraviglia</em></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"1.125rem","lineHeight":"1.5"},"color":{"text":"#272727"}}} -->
<p class="has-text-align-center has-text-color" style="color:#272727;font-size:1.125rem;font-weight:300;line-height:1.5">Risalente al primo quarto del XVI° Secolo, La Spagnuola Gavotti offre scenari unici: dai giardini con alberi secolari ai maestosi saloni affrescati.</p>
<!-- /wp:paragraph -->
<!-- /wp:group -->
<!-- wp:html -->
<div class="vsg-ambienti-grid">
  <div class="vsg-ambienti-card">
    <div class="vsg-ambienti-img">
      <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-spiaggia.jpg" alt="Spiaggia privata della Villa La Spagnuola Gavotti" loading="lazy" />
    </div>
    <div class="vsg-ambienti-caption">
      <h3 class="vsg-ambienti-title">Spiaggia privata</h3>
      <p class="vsg-ambienti-desc">Un set up romantico cullato dal rumore delle onde.</p>
    </div>
  </div>
  <div class="vsg-ambienti-card">
    <div class="vsg-ambienti-img">
      <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-giardino.jpg" alt="Giardino terrazzato in riva al mare" loading="lazy" />
    </div>
    <div class="vsg-ambienti-caption">
      <h3 class="vsg-ambienti-title">Giardino in riva al Mare</h3>
      <p class="vsg-ambienti-desc">Eleganti terrazzamenti che si affacciano sull'orizzonte.</p>
    </div>
  </div>
  <div class="vsg-ambienti-card">
    <div class="vsg-ambienti-img">
      <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-saloni.jpg" alt="Saloni affrescati del XVI secolo" loading="lazy" />
    </div>
    <div class="vsg-ambienti-caption">
      <h3 class="vsg-ambienti-title">Saloni Secolari</h3>
      <p class="vsg-ambienti-desc">L'imponenza degli affreschi ottocenteschi.</p>
    </div>
  </div>
  <div class="vsg-ambienti-card">
    <div class="vsg-ambienti-img">
      <img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-cappella.jpg" alt="Cappella privata storica della villa" loading="lazy" />
    </div>
    <div class="vsg-ambienti-caption">
      <h3 class="vsg-ambienti-title">Cappella privata</h3>
      <p class="vsg-ambienti-desc">Intimità e spiritualità in un luogo storico e riservato.</p>
    </div>
  </div>
</div>
<!-- /wp:html -->
<!-- /wp:group -->
