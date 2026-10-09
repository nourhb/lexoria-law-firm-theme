<?php
/**
 * Title: Notable case results
 * Slug: lexoria/case-results
 * Categories: lexoria
 * Description: Two-column section with Lady Justice photo and a list of notable case outcomes.
 *
 * @package Lexoria
 */
$lexoria_img = esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/images/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"full","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-full is-style-soft-frame has-custom-border"><img src="<?php echo $lexoria_img; ?>justice.jpg" alt="Statue of Lady Justice holding the scales" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-color" style="color:#c9a227;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Proven record</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"className":"is-style-gold-rule","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading is-style-gold-rule">Results that speak for themselves</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#6b6560"}}} -->
			<p class="has-text-color" style="color:#6b6560">A selection of recent outcomes secured for our clients. Every case is different — these show what relentless preparation achieves.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:list-item -->
				<li><strong>$12.4M</strong> — Medical malpractice jury verdict, 2025</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>$8.9M</strong> — Commercial dispute settlement, 2024</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>$5.2M</strong> — Motor vehicle injury settlement, 2024</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Acquittal</strong> — High-profile criminal defense trial, 2023</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>$3.7M</strong> — Estate litigation recovery, 2023</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#6b6560"}}} -->
			<p class="has-text-color" style="color:#6b6560;font-size:0.85rem"><em>Past results do not guarantee similar outcomes. Each matter is evaluated on its own facts.</em></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
