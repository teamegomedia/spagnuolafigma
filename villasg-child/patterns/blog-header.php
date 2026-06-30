<?php
/**
 * Title: Blog – Header articolo (breadcrumb + titolo + sottotitolo)
 * Slug: villasg-child/blog-header
 * Categories: villasg-blog
 * Description: Intestazione del post: breadcrumb, kicker, titolo Lora, sottotitolo.
 */
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-blog-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-blog-header" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:paragraph {"className":"vsg-overline vsg-blog-breadcrumb","fontSize":"small-caps"} -->
	<p class="vsg-overline vsg-blog-breadcrumb has-small-caps-font-size"><a href="/">Home</a> / <a href="/figma/matrimoni">Matrimoni</a> / <a href="/blog">Storie</a> / <span class="vsg-blog-breadcrumb__current">Il segreto del Ponente</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:italic;font-weight:400">Il segreto del Ponente</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"body"} -->
	<p class="has-text-align-center has-body-font-size">Perché le coppie più raffinate scelgono la Riviera autentica</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
