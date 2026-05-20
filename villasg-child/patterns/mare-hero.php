<?php
/**
 * Title: Mare – Hero (Matrimoni sul Mare)
 * Slug: villasg-child/mare-hero
 * Categories: villasg-mare
 * Description: Hero editoriale con sposi sulla spiaggia + lede + CTA.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-page-hero vsg-page-hero--editorial","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-page-hero vsg-page-hero--editorial has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-page-hero__top","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group vsg-page-hero__top">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Matrimonio sul mare in Liguria</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"vsg-page-hero__title","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center vsg-page-hero__title has-xx-large-font-size">Matrimoni sul Mare<br>alla <em>Spagnuola Gavotti</em></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:image {"align":"wide","sizeSlug":"large","className":"vsg-mare-hero__photo","style":{"border":{"radius":"6px"}}} -->
	<figure class="wp-block-image alignwide size-large has-custom-border vsg-mare-hero__photo"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg" alt="Sposi sulla spiaggia" style="border-radius:6px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"vsg-page-hero__bottom","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group vsg-page-hero__bottom">
		<!-- wp:paragraph {"align":"center","fontSize":"body"} -->
		<p class="has-text-align-center has-body-font-size">Immaginate il suono delle onde come sottofondo e l'orizzonte come unico confine. Celebrare il matrimonio sul mare alla Spagnuola Gavotti è un'esperienza di libertà: l'eleganza di una dimora storica incontra il lusso discreto di una spiaggia privata.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/contatti">Parliamo del tuo matrimonio</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
