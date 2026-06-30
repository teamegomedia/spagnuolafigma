<?php
/**
 * Title: Mare – Hero (Matrimonio sul Mare)
 * Slug: villasg-child/mare-hero
 * Categories: villasg-mare
 * Description: Hero editoriale: overline + H1 + immagine fullwidth + paragrafo introduttivo.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-page-hero vsg-page-hero--editorial","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"},"color":{"background":"#ffffff"}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-page-hero vsg-page-hero--editorial has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-page-hero__top vsg-maxw-864","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
	<div class="wp-block-group vsg-page-hero__top vsg-maxw-864">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Matrimonio sul mare in Liguria</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"vsg-page-hero__title","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center vsg-page-hero__title has-xx-large-font-size">Matrimonio sul Mare<br>alla Spagnuola Gavotti</h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:image {"align":"full","sizeSlug":"large","className":"vsg-mare-hero__photo"} -->
	<figure class="wp-block-image alignfull size-large vsg-mare-hero__photo"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/mare-hero.jpg" alt="Sposi sulla spiaggia alla Spagnuola Gavotti"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"vsg-page-hero__bottom","layout":{"type":"constrained","contentSize":"672px"}} -->
	<div class="wp-block-group vsg-page-hero__bottom">
		<!-- wp:paragraph {"align":"center","fontSize":"body"} -->
		<p class="has-text-align-center has-body-font-size">Immaginate il suono delle onde come sottofondo e l'orizzonte come unico confine. Celebrare il matrimonio sul mare alla Spagnuola Gavotti è un'esperienza di libertà: l'eleganza di una dimora storica incontra il lusso discreto di una spiaggia privata.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
