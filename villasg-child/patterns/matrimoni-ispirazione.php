<?php
/**
 * Title: Matrimoni – Trovate la vostra ispirazione
 * Slug: villasg-child/matrimoni-ispirazione
 * Categories: villasg-matrimoni
 * Description: Galleria fotografica + 2 card blog.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-ispirazione","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"neutral-sand","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-ispirazione has-neutral-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-section__head","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group vsg-section__head">
		<!-- wp:heading {"textAlign":"center","className":"vsg-section__title vsg-section__title--medium","fontSize":"medium-title"} -->
		<h2 class="wp-block-heading has-text-align-center vsg-section__title vsg-section__title--medium has-medium-title-font-size">Trovate la vostra ispirazione</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"vsg-section__lede","fontSize":"body"} -->
		<p class="has-text-align-center vsg-section__lede has-body-font-size">Galleria fotografica e ultime tendenze dal nostro blog: due porte d'ingresso al mondo della Spagnuola Gavotti.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:gallery {"columns":4,"linkTo":"none","className":"vsg-ispirazione__gallery"} -->
	<figure class="wp-block-gallery has-nested-images columns-4 is-cropped vsg-ispirazione__gallery">
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/></figure><!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt=""/></figure><!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

	<!-- wp:paragraph {"align":"center","className":"vsg-cta-link"} -->
	<p class="has-text-align-center vsg-cta-link"><a href="/gallery">Esplora la Gallery →</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
	<p class="has-text-align-center vsg-overline has-small-caps-font-size">Scopri le ultime tendenze</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"className":"vsg-ispirazione__blog-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns vsg-ispirazione__blog-grid">

		<!-- wp:column {"className":"vsg-blog-card"} -->
		<div class="wp-block-column vsg-blog-card">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"vsg-blog-card__kicker","fontSize":"small-caps"} -->
			<p class="vsg-blog-card__kicker has-small-caps-font-size">Il segreto del Ponente</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"vsg-blog-card__title","fontSize":"small-title"} -->
			<h3 class="wp-block-heading vsg-blog-card__title has-small-title-font-size">Villa La Spagnuola</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-blog-card__text","fontSize":"small"} -->
			<p class="vsg-blog-card__text has-small-font-size">Il gioiello nascosto riportato in vita dai Marchesi Gavotti. In Italia, dove molte dimore nobiliari rischiano l'abbandono, la storia di Villa La Spagnuola, a Savona, rappresenta un'eccezione luminosa.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vsg-cta-link"} -->
			<p class="vsg-cta-link"><a href="/blog/segreto-del-ponente">Leggi articolo →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-blog-card"} -->
		<div class="wp-block-column vsg-blog-card">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-villa.jpg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"vsg-blog-card__kicker","fontSize":"small-caps"} -->
			<p class="vsg-blog-card__kicker has-small-caps-font-size">Convivialità anziché folla</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"vsg-blog-card__title","fontSize":"small-title"} -->
			<h3 class="wp-block-heading vsg-blog-card__title has-small-title-font-size">Una nuova visione per i matrimoni in Italia</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-blog-card__text","fontSize":"small"} -->
			<p class="vsg-blog-card__text has-small-font-size">Perché le coppie più raffinate scelgono la Riviera autentica. Il movimento 'Luxury Hidden' ha trovato la sua dimora ideale nel Ponente Ligure.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vsg-cta-link"} -->
			<p class="vsg-cta-link"><a href="/blog/convivialita">Leggi articolo →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph {"align":"center","className":"vsg-cta-link"} -->
	<p class="has-text-align-center vsg-cta-link"><a href="/blog">Esplora il blog →</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
