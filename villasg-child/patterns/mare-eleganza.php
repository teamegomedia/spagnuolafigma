<?php
/**
 * Title: Mare – Eleganza vista mare (4 card)
 * Slug: villasg-child/mare-eleganza
 * Categories: villasg-mare
 * Description: "Eleganza vista mare per il vostro ricevimento" – 4 card ambienti.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-mare-eleganza","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-mare-eleganza has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Oltre la spiaggia, un mondo da scoprire</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:italic;font-weight:400">Eleganza vista mare per il vostro ricevimento</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"vsg-mare-eleganza__grid"} -->
	<div class="wp-block-columns alignwide vsg-mare-eleganza__grid">

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-spiaggia.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Spiaggia privata</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Un set up romantico cullato dal rumore delle onde.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-giardino.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Giardino in riva al Mare</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Eleganti terrazzamenti che si affacciano sull'orizzonte.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-saloni.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Saloni del Piano Nobile</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">L'imponenza degli affreschi ottocenteschi per banchetti monumentali.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"vsg-small-card"} -->
		<div class="wp-block-column vsg-small-card">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/ambiente-cappella.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"small-title"} -->
			<h3 class="wp-block-heading has-small-title-font-size">Cappella N.S. di Lourdes</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Un gioiello consacrato per la solennità di un rito religioso intimo.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
