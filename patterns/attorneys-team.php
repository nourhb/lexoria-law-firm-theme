<?php
/**
 * Title: Attorneys team
 * Slug: lexoria/attorneys-team
 * Categories: lexoria
 * Description: Four attorney profile cards with portraits, roles and bios.
 *
 * @package Lexoria
 */
$lexoria_img = esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/images/' );
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#12110e","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#12110e;color:#ffffff;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#e3c76a"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Counsel you can trust</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"is-style-gold-rule","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
	<h2 class="wp-block-heading has-text-align-center is-style-gold-rule has-text-color" style="color:#ffffff">Meet our attorneys</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#b8b2a4"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#b8b2a4">Seasoned litigators and trusted advisors — admitted across Ontario courts.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#1c1a17"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#1c1a17;border-radius:12px">
				<!-- wp:image {"align":"center","width":140,"height":140,"scale":"cover","sizeSlug":"full","style":{"border":{"radius":"50%"}}} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo $lexoria_img; ?>attorney-1.jpg" alt="Portrait of Jonathan Pierce" style="border-radius:50%;object-fit:cover;width:140px;height:140px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Jonathan Pierce</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#e3c76a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem">Managing Partner · 24 yrs</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8b2a4"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8b2a4;font-size:0.9rem">Corporate law &amp; complex litigation. 400+ matters resolved.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#1c1a17"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#1c1a17;border-radius:12px">
				<!-- wp:image {"align":"center","width":140,"height":140,"scale":"cover","sizeSlug":"full","style":{"border":{"radius":"50%"}}} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo $lexoria_img; ?>attorney-2.jpg" alt="Portrait of Sofia Marchetti" style="border-radius:50%;object-fit:cover;width:140px;height:140px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Sofia Marchetti</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#e3c76a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem">Senior Partner · 18 yrs</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8b2a4"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8b2a4;font-size:0.9rem">Family law &amp; mediation. Known for calm, decisive counsel.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#1c1a17"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#1c1a17;border-radius:12px">
				<!-- wp:image {"align":"center","width":140,"height":140,"scale":"cover","sizeSlug":"full","style":{"border":{"radius":"50%"}}} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo $lexoria_img; ?>attorney-3.jpg" alt="Portrait of David Okafor" style="border-radius:50%;object-fit:cover;width:140px;height:140px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">David Okafor</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#e3c76a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem">Partner · 15 yrs</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8b2a4"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8b2a4;font-size:0.9rem">Criminal defense &amp; appeals. Fearless in the courtroom.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"lexoria-card lexoria-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#1c1a17"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group lexoria-card lexoria-reveal has-background" style="background-color:#1c1a17;border-radius:12px">
				<!-- wp:image {"align":"center","width":140,"height":140,"scale":"cover","sizeSlug":"full","style":{"border":{"radius":"50%"}}} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo $lexoria_img; ?>attorney-4.jpg" alt="Portrait of Elena Rossi" style="border-radius:50%;object-fit:cover;width:140px;height:140px"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Elena Rossi</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#e3c76a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem">Partner · 12 yrs</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8b2a4"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8b2a4;font-size:0.9rem">Wills, estates &amp; real estate. Precision in every detail.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
