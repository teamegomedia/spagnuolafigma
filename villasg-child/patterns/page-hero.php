<?php
/**
 * Title: Page Hero – Interna (Matrimoni)
 * Slug: villasg-child/page-hero
 * Categories: villasg-matrimoni
 * Description: Hero editoriale: overline + titolo grande + strip foto + lede + CTA.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-page-hero vsg-page-hero--editorial","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-page-hero vsg-page-hero--editorial has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-page-hero__top","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group vsg-page-hero__top">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Matrimonio in Liguria</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"vsg-page-hero__title","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center vsg-page-hero__title has-xx-large-font-size">Il prestigio di un matrimonio<br>alla <em>Spagnuola Gavotti</em></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"vsg-page-hero__strip","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide vsg-page-hero__strip">
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-5.jpg" alt=""/></figure><!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"vsg-page-hero__bottom","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group vsg-page-hero__bottom">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">La vostra storia inizia qui</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","className":"vsg-page-hero__lede","fontSize":"body"} -->
		<p class="has-text-align-center vsg-page-hero__lede has-body-font-size">Un matrimonio esclusivo, curato nei minimi dettagli e con cambio data gratuito. Vi aiutiamo a dare forma al vostro sogno.</p>
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
