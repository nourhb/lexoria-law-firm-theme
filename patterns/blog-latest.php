<?php
/**
 * Title: Latest from the legal journal
 * Slug: lexoria/blog-latest
 * Categories: lexoria
 * Description: Three article cards with photos for the firm journal.
 *
 * @package Lexoria
 */
$lexoria_img = esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/images/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#c9a227;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Legal journal</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"is-style-gold-rule","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}}} -->
	<h2 class="wp-block-heading has-text-align-center is-style-gold-rule">Insights from our attorneys</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#faf8f3"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#faf8f3;border-radius:12px;overflow:hidden">
				<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $lexoria_img; ?>gavel.jpg" alt="Judge's gavel on a sounding block" style="border-radius:12px 12px 0 0;aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
					<p class="has-text-color" style="color:#c9a227;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase">Litigation</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">What to expect at your first court appearance</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">A practical walkthrough of procedure, etiquette and preparation.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#faf8f3"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#faf8f3;border-radius:12px;overflow:hidden">
				<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $lexoria_img; ?>signing.jpg" alt="Client signing legal documents" style="border-radius:12px 12px 0 0;aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
					<p class="has-text-color" style="color:#c9a227;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase">Contracts</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">Five clauses every founder should negotiate</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">Protect your company before the ink dries on your first deal.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#faf8f3"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#faf8f3;border-radius:12px;overflow:hidden">
				<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $lexoria_img; ?>library.jpg" alt="Wall of legal reference books" style="border-radius:12px 12px 0 0;aspect-ratio:16/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
					<p class="has-text-color" style="color:#c9a227;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase">Estate Planning</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">Wills vs. trusts: which does your family need?</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">The honest differences, and when each one makes sense.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
