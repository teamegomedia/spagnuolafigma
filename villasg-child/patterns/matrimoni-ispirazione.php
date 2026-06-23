<?php
/**
 * Title: Matrimoni – Trovate la vostra ispirazione (Galleria + Journal)
 * Slug: villasg-child/matrimoni-ispirazione
 * Categories: villasg-matrimoni
 * Description: Sezione full-bleed sfondo Morning Mist con bordi seablue, galleria fotografica e card blog dinamiche dalle ultime storie WP.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-ispirazione","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"blockGap":"var:preset|spacing|60"},"border":{"top":{"color":"var:preset|color|seablue3","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|seablue3","style":"solid","width":"1px"}}},"backgroundColor":"morning-mist","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull vsg-section vsg-ispirazione has-morning-mist-background-color has-background" style="border-top-color:var(--wp--preset--color--seablue3);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--seablue3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0">

	<!-- HEAD: titolino + titolo + lede -->
	<!-- wp:group {"className":"vsg-ispirazione__head","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
	<div class="wp-block-group vsg-ispirazione__head" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

		<!-- wp:paragraph {"align":"center","className":"vsg-overline vsg-ispirazione__kicker has-small-caps-font-size"} -->
		<p class="has-text-align-center vsg-overline vsg-ispirazione__kicker has-small-caps-font-size">Ogni dettaglio racconta una storia</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"className":"vsg-ispirazione__title","fontSize":"large-title"} -->
		<h2 class="wp-block-heading has-text-align-center vsg-ispirazione__title has-large-title-font-size">Trovate la vostra ispirazione</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"vsg-ispirazione__lede has-body-font-size"} -->
		<p class="has-text-align-center vsg-ispirazione__lede has-body-font-size">Visioni di matrimoni reali che hanno preso vita tra le mura della nostra dimora. Un'ispirazione per dare forma alla vostra idea di bellezza.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- BLOCCO GALLERIA -->
	<!-- wp:group {"className":"vsg-ispirazione__block","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group vsg-ispirazione__block">

		<!-- Header riga: titolo + link CTA -->
		<!-- wp:group {"className":"vsg-ispirazione__row-head","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
		<div class="wp-block-group vsg-ispirazione__row-head" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:html -->
			<div class="vsg-ispirazione__head-row">
				<h3 class="vsg-ispirazione__row-title">Galleria Fotografica</h3>
				<a class="vsg-ispirazione__row-cta" href="/figma/galleria/">
					<span>VAI ALLA GALLERIA</span>
					<span class="vsg-ispirazione__row-cta-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- Galleria slider 8 immagini -->
		<!-- wp:gallery {"linkTo":"none","className":"vsg-ispirazione__gallery","align":"full"} -->
		<figure class="wp-block-gallery alignfull has-nested-images is-cropped vsg-ispirazione__gallery">
			<?php for ( $i = 1; $i <= 8; $i++ ) : ?>
			<!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-<?php echo (int) $i; ?>.jpg" alt=""/></figure><!-- /wp:image -->
			<?php endfor; ?>
		</figure>
		<!-- /wp:gallery -->

	</div>
	<!-- /wp:group -->

	<!-- BLOCCO JOURNAL -->
	<!-- wp:group {"className":"vsg-ispirazione__block","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group vsg-ispirazione__block">

		<!-- Header riga: titolo + link CTA -->
		<!-- wp:group {"className":"vsg-ispirazione__row-head","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1344px"}} -->
		<div class="wp-block-group vsg-ispirazione__row-head" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:html -->
			<div class="vsg-ispirazione__head-row">
				<h3 class="vsg-ispirazione__row-title">Il nostro Journal: Idee e tendenze</h3>
				<a class="vsg-ispirazione__row-cta" href="/figma/storie/">
					<span>SCOPRI LE ULTIME TENDENZE</span>
					<span class="vsg-ispirazione__row-cta-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- wp:shortcode -->
		[vsg_journal count="4"]
		<!-- /wp:shortcode -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
