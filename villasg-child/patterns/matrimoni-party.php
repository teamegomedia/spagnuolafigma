<?php
/**
 * Title: Matrimoni – La magia di un party senza orizzonti
 * Slug: villasg-child/matrimoni-party
 * Categories: villasg-matrimoni
 * Description: Sezione due colonne: immagine + testo.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-party","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-party" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","className":"vsg-party__media"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-party__media">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-6.jpg" alt="Party serale alla Spagnuola Gavotti"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","className":"vsg-party__text"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-party__text">
			<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
			<p class="vsg-overline has-small-caps-font-size">Oltre il tramonto</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"vsg-section__title","fontSize":"x-large"} -->
			<h2 class="wp-block-heading vsg-section__title has-x-large-font-size">La <em>magia</em> di un party senza orizzonti</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"body"} -->
			<p class="has-body-font-size">Il taglio della torta sotto le stelle è solo l'inizio di un nuovo capitolo. Alla Spagnuola Gavotti, l'emozione del vostro giorno più bello non ha bisogno di guardare l'orologio: tra le mura storiche delle antiche Tinaie la festa continua con il DJ Set e l'Open Bar senza alcun limite di orario.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
