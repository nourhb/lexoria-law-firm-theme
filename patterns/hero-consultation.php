<?php
/**
 * Title: Hero with free consultation CTA
 * Slug: lexoria/hero-consultation
 * Categories: lexoria
 * Description: Full-width cover hero with firm headline and free consultation call to action.
 *
 * @package Lexoria
 */
$lexoria_img = esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/images/' );
?>
<!-- wp:cover {"url":"<?php echo $lexoria_img; ?>hero-law-office.jpg","dimRatio":65,"overlayColor":"charcoal","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim-65 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Grand law library with dark wood shelves" src="<?php echo $lexoria_img; ?>hero-law-office.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#e3c76a"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e3c76a;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Lexoria · Attorneys at Law</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Decisive counsel for life's highest stakes</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#d8d2c4"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#d8d2c4;font-size:1.125rem">For over three decades, Lexoria has stood beside individuals and businesses when the outcome matters most.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#consultation">Book a Free Consultation</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-gold-outline"} -->
				<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link wp-element-button" href="#practice-areas">Explore Practice Areas</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontSize":"0.95rem"},"color":{"text":"#d8d2c4"}}} -->
			<div class="wp-block-group has-text-color" style="color:#d8d2c4;margin-top:var(--wp--preset--spacing--50);font-size:0.95rem">
				<!-- wp:paragraph -->
				<p>★ 4.9 client rating</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>$480M+ recovered</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>32 years of practice</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
