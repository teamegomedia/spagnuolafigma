<?php
/**
 * Title: Matrimoni – La magia di un party senza orizzonti
 * Slug: villasg-child/matrimoni-party
 * Categories: villasg-matrimoni
 * Description: Sezione due colonne — immagine a sinistra + testo a destra (overline, titolo, lede su 2 paragrafi).
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-party","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-party" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","className":"vsg-party__media"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-party__media">
			<div class="vsg-party__collage">
				<!-- wp:image {"sizeSlug":"large","className":"vsg-party__img vsg-party__img--1"} -->
				<figure class="wp-block-image size-large vsg-party__img vsg-party__img--1"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-6.jpg" alt="Vista mare dalla terrazza"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"large","className":"vsg-party__img vsg-party__img--2"} -->
				<figure class="wp-block-image size-large vsg-party__img vsg-party__img--2"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-2.jpg" alt="Vista dal giardino"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"large","className":"vsg-party__img vsg-party__img--3"} -->
				<figure class="wp-block-image size-large vsg-party__img vsg-party__img--3"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-4.jpg" alt="Camera padronale"/></figure>
				<!-- /wp:image -->
			</div>
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","className":"vsg-party__text"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-party__text">
			<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
			<p class="vsg-overline has-small-caps-font-size">Oltre il tramonto</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"vsg-party__title","fontSize":"large-title"} -->
			<h2 class="wp-block-heading vsg-party__title has-large-title-font-size">La <em>magia</em> di un party senza orizzonti</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-party__lede","fontSize":"body"} -->
			<p class="vsg-party__lede has-body-font-size">Il taglio della torta sotto le stelle è solo l'inizio di un nuovo capitolo. Alla Spagnuola Gavotti, l'emozione del vostro giorno più bello non ha bisogno di guardare l'orologio: tra le mura storiche delle antiche Tinaie la festa continua con il DJ Set e l'Open Bar senza alcun limite di orario.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"vsg-party__lede","fontSize":"body"} -->
			<p class="vsg-party__lede has-body-font-size">Dalle prime luci del tramonto fino al sorgere del sole, lasciatevi trasportare dal ritmo e dalla gioia di un party esclusivo, pensato per restare nel cuore dei vostri ospiti come un ricordo indelebile.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
