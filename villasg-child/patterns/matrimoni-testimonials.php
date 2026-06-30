<?php
/**
 * Title: Matrimoni – Dicono di noi
 * Slug: villasg-child/matrimoni-testimonials
 * Categories: villasg-matrimoni
 * Description: Testimonianze dinamiche dal CPT "testimonianze" in slider. Imposta la categoria nello shortcode.
 */
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-testimonials","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-testimonials has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"className":"vsg-section__head","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
	<div class="wp-block-group vsg-section__head">
		<!-- wp:paragraph {"align":"center","className":"vsg-overline","fontSize":"small-caps"} -->
		<p class="has-text-align-center vsg-overline has-small-caps-font-size">Dicono di noi</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","className":"vsg-section__title vsg-section__title--medium","fontSize":"medium-title"} -->
		<h2 class="wp-block-heading has-text-align-center vsg-section__title vsg-section__title--medium has-medium-title-font-size">Le parole dei nostri sposi</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:shortcode -->
	[vsg_testimonianze category="matrimoni" limit="12"]
	<!-- /wp:shortcode -->

</div>
<!-- /wp:group -->

