<?php
/**
 * Title: Mare – Party senza orizzonti
 * Slug: villasg-child/mare-party
 * Categories: villasg-mare
 * Description: Sezione "La magia di un party senza orizzonti" – foto + testo.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:group {"align":"full","className":"vsg-section vsg-party","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"bg","layout":{"type":"constrained","contentSize":"1344px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-party has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"vsg-party__media"} -->
		<div class="wp-block-column is-vertically-aligned-center vsg-party__media" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-6.jpg" alt="" style="border-radius:6px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"472px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"vsg-overline","fontSize":"small-caps"} -->
				<p class="vsg-overline has-small-caps-font-size">Oltre il tramonto</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"fontSize":"x-large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="font-style:italic;font-weight:400">La magia di un <em>party</em> senza orizzonti</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"body"} -->
				<p class="has-body-font-size">Il taglio della torta sotto le stelle è solo l'inizio di un nuovo capitolo. Alla Spagnuola Gavotti, l'emozione del vostro giorno più bello non ha bisogno di guardare l'orologio: tra le mura storiche delle antiche Tinaie la festa continua con il DJ Set e l'Open Bar senza alcun limite di orario.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Dalle prime luci del tramonto fino al sorgere del sole, lasciatevi trasportare dal ritmo e dalla gioia di un party esclusivo, pensato per restare nel cuore dei vostri ospiti come un ricordo indelebile.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
