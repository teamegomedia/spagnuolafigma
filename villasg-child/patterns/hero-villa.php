<?php
/**
 * Title: Hero Villa
 * Slug: villasg-child/hero-villa
 * Categories: villasg-sections
 * Description: Hero fullscreen con wordmark centrale e nav inferiore – Figma 671:8479.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:html -->
<div class="vsg-hero">
  <img class="vsg-hero__bg" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/hero.jpg" alt="Villa La Spagnuola Gavotti al tramonto sul mare" loading="eager" />
  <span class="vsg-hero__overlay" aria-hidden="true"></span>
  <div class="vsg-hero__content">
    <div class="vsg-hero__brand" role="img" aria-label="La Spagnuola — Marchesi Gavotti"></div>
    <div class="vsg-hero-nav">
      <ul class="vsg-hero-nav__links">
        <li><a href="/matrimoni">Matrimoni</a></li>
        <li><a href="/eventi">Eventi</a></li>
        <li><a href="/soggiorni">Soggiorni</a></li>
      </ul>
      <p class="vsg-hero-nav__scroll">Scorri per scoprire <span aria-hidden="true">&darr;</span></p>
    </div>
  </div>
</div>
<!-- /wp:html -->
