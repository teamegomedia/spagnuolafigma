<?php
/**
 * Title: Home – L'arte della villeggiatura (Soggiorni)
 * Slug: villasg-child/home-villeggiatura
 * Categories: villasg-home
 * Description: Sezione "L'arte della villeggiatura" – collage 2 immagini + testo + CTA.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-villeggiatura","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"},"anchor":"soggiorni"} -->
<div id="soggiorni" class="wp-block-group alignfull vsg-section vsg-villeggiatura has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"vsg-villeggiatura__media"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-villeggiatura__media" style="flex-basis:55%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/soggiorni-collage.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"480px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
				<p class="vsg-overline has-small-caps-font-size">Soggiornare alla Spagnuola</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="font-style:italic;font-weight:400">L'arte della villeggiatura</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body"} -->
				<p class="has-body-font-size">L'esperienza di vivere la Riviera negli appartamenti delle Foresterie dei Marchesi Gavotti.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Comfort contemporaneo immerso in un parco del XVI secolo, con il privilegio della spiaggia privata a pochi passi. Il ritiro perfetto per il vostro relax o lo smart working sul mare.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/soggiorni">Scopri di più</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
