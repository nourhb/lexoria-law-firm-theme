<?php
/**
 * Title: Contact information columns
 * Slug: lexoria/contact-info
 * Categories: lexoria
 * Description: Office address, phone/email and hours columns with handshake photo.
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
			<figure class="wp-block-image size-full is-style-soft-frame has-custom-border"><img src="<?php echo $lexoria_img; ?>handshake.jpg" alt="Attorney shaking hands with a client" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-color" style="color:#c9a227;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Visit or call</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"className":"is-style-gold-rule","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}}} -->
			<h2 class="wp-block-heading is-style-gold-rule">We're here when you need us</h2>
			<!-- /wp:heading -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.1rem">Office</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">200 Bay Street, Suite 1800<br>Toronto, ON M5J 2J1</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.1rem">Contact</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">+1 (416) 555-0134<br>hello@lexorialaw.com</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.1rem">Hours</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b6560"}}} -->
					<p class="has-text-color" style="color:#6b6560;font-size:0.95rem">Mon–Fri · 8:30 AM – 6:00 PM<br>Urgent matters · 24/7 line</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
