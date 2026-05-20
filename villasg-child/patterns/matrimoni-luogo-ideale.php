<?php
/**
 * Title: Matrimoni – Ogni promessa trova il suo luogo ideale
 * Slug: villasg-child/matrimoni-luogo-ideale
 * Categories: villasg-matrimoni
 * Description: 3 card piccole con immagine + titolo + paragrafo.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-luogo","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-luogo" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-section__head","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group vsg-section__head">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">La libertà del "Sì"</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","className":"vsg-section__title","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center vsg-section__title has-x-large-font-size">Ogni promessa trova il suo luogo ideale</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"vsg-section__lede","fontSize":"body"} -->
		<p class="has-text-align-center vsg-section__lede has-body-font-size">Non importa quale sia la forma della vostra promessa; alla Spagnuola Gavotti troverete lo spazio perfetto per pronunciarla. Siamo a vostra completa disposizione per coordinare ogni dettaglio tecnico e logistico, affinché la cerimonia sia lo specchio fedele del vostro desiderio.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"vsg-luogo__grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns vsg-luogo__grid">

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-spiaggia.jpg" alt="Rito civile in spiaggia"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"className":"vsg-small-card__title","fontSize":"small-title"} -->
			<h3 class="wp-block-heading vsg-small-card__title has-small-title-font-size">Rito Civile in Spiaggia</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-small-card__text","fontSize":"small"} -->
			<p class="vsg-small-card__text has-small-font-size">Questo vi permette di celebrare il matrimonio con pieno valore legale direttamente sulla sabbia, avvolti dal suono delle onde e dall'orizzonte del mare.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-cappella.jpg" alt="La Cappella Privata"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"className":"vsg-small-card__title","fontSize":"small-title"} -->
			<h3 class="wp-block-heading vsg-small-card__title has-small-title-font-size">La Cappella Privata</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-small-card__text","fontSize":"small"} -->
			<p class="vsg-small-card__text has-small-font-size">Un gioiello consacrato all'interno della tenuta. Intimità e spiritualità in un luogo storico e riservato.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-saloni.jpg" alt="Cerimonie in Villa"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"className":"vsg-small-card__title","fontSize":"small-title"} -->
			<h3 class="wp-block-heading vsg-small-card__title has-small-title-font-size">Cerimonie in Villa</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vsg-small-card__text","fontSize":"small"} -->
			<p class="vsg-small-card__text has-small-font-size">Saloni affrescati e giardini secolari fanno da cornice alla cerimonia simbolica più suggestiva, nel cuore della dimora.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
