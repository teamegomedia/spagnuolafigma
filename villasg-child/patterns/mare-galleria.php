<?php
/**
 * Title: Mare – Trovate la vostra ispirazione (Gallery)
 * Slug: villasg-child/mare-galleria
 * Categories: villasg-mare
 * Description: Galleria fotografica orientata mare con CTA Esplora la Gallery.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-mare-galleria","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-mare-galleria has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Galleria fotografica</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:italic;font-weight:400">Trovate la vostra ispirazione</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:gallery {"columns":4,"linkTo":"none","sizeSlug":"large","align":"wide","className":"vsg-ispirazione__gallery"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped vsg-ispirazione__gallery">
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt=""/></figure><!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

	<!-- wp:paragraph {"align":"right","className":"vsg-cta-link"} -->
	<p class="has-text-align-right vsg-cta-link"><a href="/gallery">Esplora la Gallery →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
