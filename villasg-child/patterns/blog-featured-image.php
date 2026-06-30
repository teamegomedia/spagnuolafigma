<?php
/**
 * Title: Blog – Immagine featured + caption
 * Slug: villasg-child/blog-featured-image
 * Categories: villasg-blog
 * Description: Immagine wide del post con didascalia opzionale.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-blog-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-blog-featured has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:image {"sizeSlug":"large","align":"wide","style":{"border":{"radius":"6px"}}} -->
	<figure class="wp-block-image alignwide size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg" alt="" style="border-radius:6px"/><figcaption class="wp-element-caption">Vista mozzafiato sulla costa ligure dal loggiato di La Spagnuola Gavotti.</figcaption></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
