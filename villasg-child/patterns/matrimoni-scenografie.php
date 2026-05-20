<?php
/**
 * Title: Matrimoni – Scenografie per la vostra storia
 * Slug: villasg-child/matrimoni-scenografie
 * Categories: villasg-matrimoni
 * Description: Due card grandi con immagine di sfondo: Matrimonio sul Mare / Matrimonio Elegante in Villa.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-scenografie","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-scenografie" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-section__head","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group vsg-section__head">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Le anime della dimora</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","className":"vsg-section__title","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center vsg-section__title has-x-large-font-size">Scenografie per la vostra storia</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"vsg-section__lede","fontSize":"body"} -->
		<p class="has-text-align-center vsg-section__lede has-body-font-size">Ogni matrimonio alla Spagnuola è un percorso irripetibile che prende forma intorno ai vostri desideri. Per aiutarvi a immaginare l'inizio di questo viaggio, abbiamo racchiuso l'essenza della Villa in due grandi ispirazioni.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"vsg-scenografie__grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns vsg-scenografie__grid">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg","dimRatio":40,"overlayColor":"heading","minHeight":600,"className":"vsg-big-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-cover vsg-big-card" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-mare.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

				<!-- wp:group {"className":"vsg-big-card__inner","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group vsg-big-card__inner">
					<!-- wp:heading {"level":3,"className":"vsg-big-card__title","fontSize":"x-large","textColor":"inverse"} -->
					<h3 class="wp-block-heading vsg-big-card__title has-inverse-color has-text-color has-x-large-font-size">Matrimonio sul Mare</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vsg-big-card__text","fontSize":"small","textColor":"inverse"} -->
					<p class="vsg-big-card__text has-inverse-color has-text-color has-small-font-size">Rito civile sulla sabbia, ricevimento nel giardino a mare e party senza limiti di orario. L'emozione della Riviera in totale privacy.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vsg-cta-link","fontSize":"small-caps","textColor":"inverse"} -->
					<p class="vsg-cta-link has-inverse-color has-text-color has-small-caps-font-size"><a href="/matrimoni-mare">Scopri di più →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-villa.jpg","dimRatio":40,"overlayColor":"heading","minHeight":600,"className":"vsg-big-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-cover vsg-big-card" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/card-villa.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

				<!-- wp:group {"className":"vsg-big-card__inner","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group vsg-big-card__inner">
					<!-- wp:heading {"level":3,"className":"vsg-big-card__title","fontSize":"x-large","textColor":"inverse"} -->
					<h3 class="wp-block-heading vsg-big-card__title has-inverse-color has-text-color has-x-large-font-size">Matrimonio Elegante in Villa</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vsg-big-card__text","fontSize":"small","textColor":"inverse"} -->
					<p class="vsg-big-card__text has-inverse-color has-text-color has-small-font-size">Saloni affrescati, giardini storici e la suggestione della Cappella Privata. L'eleganza assoluta di una dimora del XVI secolo.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vsg-cta-link","fontSize":"small-caps","textColor":"inverse"} -->
					<p class="vsg-cta-link has-inverse-color has-text-color has-small-caps-font-size"><a href="/matrimoni-villa">Scopri di più →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
