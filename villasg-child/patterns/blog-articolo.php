<?php
/**
 * Title: Blog – Articolo completo (demo)
 * Slug: villasg-child/blog-articolo
 * Categories: villasg-blog
 * Description: Pagina articolo completa pronta da inserire: breadcrumb + titolo, hero, lead, sezioni, pullquote, immagine duo, CTA dark, istantanee.
 */
$vsg_theme = get_stylesheet_directory_uri();
?>
<!-- wp:pattern {"slug":"villasg-child/blog-header"} /-->

<!-- wp:pattern {"slug":"villasg-child/blog-featured-image"} /-->

<!-- wp:pattern {"slug":"villasg-child/blog-lead"} /-->

<!-- wp:pattern {"slug":"villasg-child/blog-section"} /-->

<!-- wp:pattern {"slug":"villasg-child/blog-image-duo"} /-->

<!-- wp:group {"align":"full","className":"vsg-section vsg-blog-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-blog-section" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":2,"fontSize":"large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
	<h2 class="wp-block-heading has-large-font-size" style="font-style:italic;font-weight:400">Il movimento del &#8220;Lusso Nascosto&#8221;</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"fontSize":"body"} -->
	<p class="has-body-font-size">Non si tratta di una sala d&#8217;albergo né di un resort commerciale. È un palazzo privato del Cinquecento con spiaggia privata, restaurato con cura, dove le coppie progettano la propria giornata intorno alla loro storia — non intorno a pacchetti predefiniti.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"fontSize":"body"} -->
	<p class="has-body-font-size">Questo approccio risuona con un crescente movimento di ricerca del &#8220;lusso nascosto&#8221; e dei &#8220;gioielli segreti&#8221;: coppie che apprezzano la discrezione più dell&#8217;ostentazione, l&#8217;autenticità più dello spettacolo. Non sono qui per essere viste. Sono qui per accogliere — invitando i propri ospiti in un mondo privato dove storia, mare e festa si incontrano con naturalezza.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"villasg-child/blog-pullquote"} /-->

<!-- wp:group {"align":"full","className":"vsg-section vsg-blog-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"672px"}} -->
<div class="wp-block-group alignfull vsg-section vsg-blog-section" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":2,"fontSize":"large","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
	<h2 class="wp-block-heading has-large-font-size" style="font-style:italic;font-weight:400">La libertà di scegliere</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"fontSize":"body"} -->
	<p class="has-body-font-size">Che le coppie arrivino con il proprio wedding planner o scelgano dalla rete selezionata di fornitori di fiducia della villa, l&#8217;esperienza resta fluida e profondamente su misura.</p>
	<!-- /wp:paragraph -->
	<!-- wp:image {"sizeSlug":"large","align":"center","className":"vsg-blog-inline-img"} -->
	<figure class="wp-block-image aligncenter size-large vsg-blog-inline-img"><img src="<?php echo esc_url( $vsg_theme ); ?>/assets/images/gallery-3.jpg" alt=""/><figcaption class="wp-element-caption">Una sposa si prepara al grande momento aiutata dalla sua truccatrice di fiducia.</figcaption></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"villasg-child/blog-cta-finale"} /-->

<!-- wp:pattern {"slug":"villasg-child/home-istantanee"} /-->
