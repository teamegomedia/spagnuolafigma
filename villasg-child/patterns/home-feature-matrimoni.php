<?php
/**
 * Title: Home – Feature Matrimoni (card grande)
 * Slug: villasg-child/home-feature-matrimoni
 * Categories: villasg-home
 * Description: Card full-bleed con immagine, overline, titolo e CTA Matrimoni.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/matrimoni-cover.jpg","dimRatio":40,"overlayColor":"heading","minHeight":560,"contentPosition":"center left","isDark":true,"align":"full","className":"vsg-home-feature vsg-big-card","anchor":"matrimoni"} -->
<div id="matrimoni" class="wp-block-cover alignfull is-light vsg-home-feature vsg-big-card" style="min-height:560px">
	<span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-40 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/matrimoni-cover.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"672px","justifyContent":"left"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"className":"vsg-overline vsg-overline--light","fontSize":"small-caps"} -->
			<p class="vsg-overline vsg-overline--light has-small-caps-font-size">L'estetica dell'esclusività</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"textColor":"inverse","fontSize":"xx-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
			<h2 class="wp-block-heading has-inverse-color has-text-color has-xx-large-font-size" style="font-style:italic;font-weight:400">Matrimoni</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"inverse","fontSize":"body"} -->
			<p class="has-inverse-color has-text-color has-body-font-size">La Spagnuola Gavotti offre infiniti sfondi per il Vostro matrimonio unico ed esclusivo.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/matrimoni">Scopri di più</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
