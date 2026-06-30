<?php
/**
 * Title: Home – Istantanee (Gallery)
 * Slug: villasg-child/home-istantanee
 * Categories: villasg-home
 * Description: Galleria fotografica 4 colonne con CTA "Esplora la Gallery".
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-home-istantanee","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-home-istantanee" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"fontSize":"large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
	<h2 class="wp-block-heading has-large-font-size" style="font-style:italic;font-weight:400">Istantanee</h2>
	<!-- /wp:heading -->

	<!-- wp:gallery {"columns":4,"linkTo":"none","sizeSlug":"large","align":"wide","className":"vsg-ispirazione__gallery"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped vsg-ispirazione__gallery">
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-5.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-6.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-7.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-8.jpg" alt=""/></figure><!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

	<!-- wp:paragraph {"align":"right","className":"vsg-cta-link"} -->
	<p class="has-text-align-right vsg-cta-link"><a href="/gallery">Esplora la Gallery →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
