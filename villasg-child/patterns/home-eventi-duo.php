<?php
/**
 * Title: Home – Eventi (Eleganti + Aziendali)
 * Slug: villasg-child/home-eventi-duo
 * Categories: villasg-home
 * Description: Due card grandi affiancate per Eventi Eleganti ed Eventi Aziendali.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-home-eventi","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull vsg-section vsg-home-eventi" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-eleganti.jpg","dimRatio":40,"overlayColor":"heading","minHeight":520,"contentPosition":"bottom left","isDark":true,"className":"vsg-big-card vsg-big-card--half"} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left vsg-big-card vsg-big-card--half" style="min-height:520px">
				<span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-40 has-background-dim"></span>
				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-eleganti.jpg" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:paragraph {"className":"vsg-overline vsg-overline--light","fontSize":"small-caps"} -->
						<p class="vsg-overline vsg-overline--light has-small-caps-font-size">Atmosfere private</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":2,"textColor":"inverse","fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
						<h2 class="wp-block-heading has-inverse-color has-text-color has-x-large-font-size" style="font-style:italic;font-weight:400">Eventi Eleganti</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"textColor":"inverse","fontSize":"small"} -->
						<p class="has-inverse-color has-text-color has-small-font-size">Cene di gala, anniversari e celebrazioni curate nei minimi dettagli, in una dimora dove ogni stanza racconta una storia.</p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
							<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/eventi-eleganti">Scopri di più</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-aziendali.jpg","dimRatio":40,"overlayColor":"heading","minHeight":520,"contentPosition":"bottom left","isDark":true,"className":"vsg-big-card vsg-big-card--half"} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left vsg-big-card vsg-big-card--half" style="min-height:520px">
				<span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-40 has-background-dim"></span>
				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/eventi-aziendali.jpg" data-object-fit="cover"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:paragraph {"className":"vsg-overline vsg-overline--light","fontSize":"small-caps"} -->
						<p class="vsg-overline vsg-overline--light has-small-caps-font-size">Prestigio e visione</p>
						<!-- /wp:paragraph -->
						<!-- wp:heading {"level":2,"textColor":"inverse","fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
						<h2 class="wp-block-heading has-inverse-color has-text-color has-x-large-font-size" style="font-style:italic;font-weight:400">Eventi Aziendali</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"textColor":"inverse","fontSize":"small"} -->
						<p class="has-inverse-color has-text-color has-small-font-size">Convention, offsite e presentazioni. Un contesto autorevole dove la storia del XVI secolo ispira i vostri traguardi futuri.</p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse"} -->
							<div class="wp-block-button"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="/eventi-aziendali">Scopri di più</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
