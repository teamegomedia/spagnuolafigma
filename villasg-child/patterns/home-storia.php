<?php
/**
 * Title: Home – Mezzo millennio di storia
 * Slug: villasg-child/home-storia
 * Categories: villasg-home
 * Description: Testo "Mezzo millennio di storia" + collage immagini documenti d'epoca.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-home-storia","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-home-storia" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"className":"vsg-maxw-472","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
			<div class="wp-block-group vsg-maxw-472">
				<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
				<p class="vsg-overline has-small-caps-font-size">La storia della Villa</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="font-style:italic;font-weight:400">Mezzo millennio di storia</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body"} -->
				<p class="has-body-font-size">Nata come torre di avvistamento per difendere la costa dalle incursioni dei pirati turchi, la fortezza si è evoluta nei secoli in palazzo gentilizio.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Una dimora d'epoca che ha ospitato il Vicerè di Napoli e Napoleone, oggi trasformata in una residenza di rara eleganza. I saloni nobiliari affrescati nell'Ottocento e i giardini terrazzati offrono una cornice d'eccezione, sospesa sulla riva del mare.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/storia">Scopri di più</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"vsg-home-storia__media"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-home-storia__media" style="flex-basis:55%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/storia-collage.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
