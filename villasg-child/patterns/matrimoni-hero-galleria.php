<?php
/**
 * Title: Matrimoni – Hero: 4 immagini affiancate
 * Slug: villasg-child/matrimoni-hero-galleria
 * Categories: villasg-matrimoni
 * Description: Striscia full-width con 4 immagini affiancate (1 riga su desktop). Immagini modificabili dall'editor. Da inserire subito dopo "Hero Titolo".
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-hero-strip","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull vsg-hero-strip" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">

	<!-- wp:gallery {"columns":4,"imageCrop":true,"linkTo":"none","className":"vsg-hero-strip__grid"} -->
	<figure class="wp-block-gallery has-nested-images columns-4 is-cropped vsg-hero-strip__grid">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt=""/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->
