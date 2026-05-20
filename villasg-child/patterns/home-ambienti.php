<?php
/**
 * Title: Home – Ambienti che ispirano (4 card)
 * Slug: villasg-child/home-ambienti
 * Categories: villasg-home
 * Description: Intro + 4 card piccole (Spiaggia / Giardino / Saloni / Cappella).
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-home-ambienti","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-home-ambienti has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">L'anima della dimora</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:italic;font-weight:400">Ambienti che ispirano meraviglia</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","fontSize":"body"} -->
		<p class="has-text-align-center has-body-font-size">Riserviamo la nostra Villa per un solo evento alla volta. Soggiorni e matrimoni, uniti dal valore della cura.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"vsg-home-ambienti__grid"} -->
	<div class="wp-block-columns alignwide vsg-home-ambienti__grid">

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-spiaggia.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Spiaggia privata</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Un set up romantico cullato dal rumore delle onde.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-giardino.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Giardino in riva al Mare</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Eleganti terrazzamenti che si affacciano sull'orizzonte.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-saloni.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Saloni secolari</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">L'imponenza degli affreschi ottocenteschi.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-cappella.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Cappella privata</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Intimità e spiritualità in un luogo storico e riservato.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
