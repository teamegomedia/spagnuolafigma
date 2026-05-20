<?php
/**
 * Title: Matrimoni – Hero: 4 immagini affiancate
 * Slug: villasg-child/matrimoni-hero-galleria
 * Categories: villasg-matrimoni
 * Description: Striscia full-width con 4 immagini affiancate (1 riga su desktop). Da inserire subito dopo "Hero Titolo".
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-hero-strip","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull vsg-hero-strip" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">

	<!-- wp:html -->
	<div class="vsg-hero-strip__grid" role="region" aria-label="Galleria matrimoni">
		<figure class="vsg-hero-strip__item"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt="" loading="lazy"/></figure>
		<figure class="vsg-hero-strip__item"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt="" loading="lazy"/></figure>
		<figure class="vsg-hero-strip__item"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt="" loading="lazy"/></figure>
		<figure class="vsg-hero-strip__item"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt="" loading="lazy"/></figure>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
