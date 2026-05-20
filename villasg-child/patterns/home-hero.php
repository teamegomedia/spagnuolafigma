<?php
/**
 * Title: Home – Hero fullscreen
 * Slug: villasg-child/home-hero
 * Categories: villasg-home
 * Description: Hero immersivo full-bleed con monogramma e CTA scroll Matrimoni/Soggiorni.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:cover {"url":"<?php echo esc_url( $vsg_theme ); ?>/assets/images/hero.jpg","dimRatio":30,"overlayColor":"heading","minHeight":92,"minHeightUnit":"vh","contentPosition":"center center","isDark":true,"align":"full","className":"vsg-home-hero"} -->
<div class="wp-block-cover alignfull is-light vsg-home-hero" style="min-height:92vh">
	<span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-30 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/hero.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group">
			<!-- wp:image {"align":"center","width":"160px","sizeSlug":"full","className":"vsg-home-hero__monogram is-style-default"} -->
			<figure class="wp-block-image aligncenter size-full is-resized vsg-home-hero__monogram is-style-default"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/logo-marchio-hero.svg" alt="La Spagnuola Gavotti" style="width:160px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","className":"vsg-overline vsg-overline--light","fontSize":"small-caps"} -->
			<p class="has-text-align-center vsg-overline vsg-overline--light has-small-caps-font-size">Scorri per scoprire</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"className":"vsg-home-hero__cta"} -->
		<div class="wp-block-buttons vsg-home-hero__cta">
			<!-- wp:button {"backgroundColor":"seablue1","textColor":"inverse","className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-inverse-color has-seablue1-background-color has-text-color has-background wp-element-button" href="#matrimoni">Matrimoni</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"textColor":"inverse","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-inverse-color has-text-color wp-element-button" href="#soggiorni">Soggiorni</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
</div>
<!-- /wp:cover -->
