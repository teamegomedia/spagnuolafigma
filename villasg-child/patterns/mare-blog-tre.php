<?php
/**
 * Title: Mare – Ultime tendenze (3 card blog)
 * Slug: villasg-child/mare-blog-tre
 * Categories: villasg-mare
 * Description: Riga blog con 3 articoli di approfondimento sul tema mare.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-mare-blog","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-mare-blog has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
	<p class="vsg-overline has-small-caps-font-size">Scopri le ultime tendenze</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"className":"vsg-blog-card"} -->
		<div class="wp-block-column vsg-blog-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"vsg-blog-card__kicker vsg-overline","fontSize":"small-caps"} -->
			<p class="vsg-blog-card__kicker vsg-overline has-small-caps-font-size">Matrimoni in Riviera</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Il segreto del Ponente</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Perché le coppie più raffinate scelgono la Riviera autentica. Il movimento 'Luxury Hidden' e la sua dimora ideale nel Ponente Ligure.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vsg-cta-link"} -->
			<p class="vsg-cta-link"><a href="/blog/segreto-ponente">Leggi articolo →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-blog-card"} -->
		<div class="wp-block-column vsg-blog-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-villa.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"vsg-blog-card__kicker vsg-overline","fontSize":"small-caps"} -->
			<p class="vsg-blog-card__kicker vsg-overline has-small-caps-font-size">Storia e dimore</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Villa La Spagnuola</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Il gioiello nascosto riportato in vita dai Marchesi Gavotti. In Italia, dove molte dimore nobiliari rischiano l'abbandono, una storia di eccezione luminosa.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vsg-cta-link"} -->
			<p class="vsg-cta-link"><a href="/blog/villa-spagnuola">Leggi articolo →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-blog-card"} -->
		<div class="wp-block-column vsg-blog-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"vsg-blog-card__kicker vsg-overline","fontSize":"small-caps"} -->
			<p class="vsg-blog-card__kicker vsg-overline has-small-caps-font-size">Tendenze 2026</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Convivialità anziché folla</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Una nuova visione per i matrimoni all'estero in Italia: perché i matrimoni intimi sono il nuovo status symbol.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"vsg-cta-link"} -->
			<p class="vsg-cta-link"><a href="/blog/convivialita">Leggi articolo →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph {"align":"right","className":"vsg-cta-link"} -->
	<p class="has-text-align-right vsg-cta-link"><a href="/blog">Esplora il blog →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
