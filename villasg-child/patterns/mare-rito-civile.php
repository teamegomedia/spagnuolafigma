<?php
/**
 * Title: Mare – Un "Sì" che profuma di mare (testo + 4 foto)
 * Slug: villasg-child/mare-rito-civile
 * Categories: villasg-mare
 * Description: Sezione editoriale con paragrafo + gallery 4 foto della spiaggia.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-mare-rito","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-mare-rito has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"420px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
				<p class="vsg-overline has-small-caps-font-size">Emozioni a piedi nudi</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="font-style:italic;font-weight:400">Un "Sì" che profuma di mare</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body"} -->
				<p class="has-body-font-size">Celebrare il rito civile direttamente sulla spiaggia significa accompagnare il giorno più bello con il solo suono delle onde. La Spagnuola Gavotti, in quanto Casa Comunale, offre il privilegio esclusivo di scambiarsi le promesse con pieno valore legale sulla sabbia, nell'orizzonte infinito della Riviera Ligure.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Un momento autentico, senza necessità di spostamenti, immersi totalmente nella luce e nel respiro del mare.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/contatti">Richiedi informazioni</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"large","className":"vsg-mare-rito__gallery"} -->
			<figure class="wp-block-gallery has-nested-images columns-2 is-cropped vsg-mare-rito__gallery">
				<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-1.jpg" alt=""/></figure><!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt=""/></figure><!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/></figure><!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt=""/></figure><!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
