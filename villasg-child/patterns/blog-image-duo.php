<?php
/**
 * Title: Blog – Coppia di immagini affiancate
 * Slug: villasg-child/blog-image-duo
 * Categories: villasg-blog
 * Description: Due foto affiancate per spezzare la lettura.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-blog-image-duo","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-blog-image-duo" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"large","align":"wide"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-2 is-cropped">
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure><!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
