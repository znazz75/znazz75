<?php
/**
 * Title: Newsletter CTA
 * Slug: znazz75/newsletter
 * Categories: znazz75
 * Description: Gradient call-to-action card with an email signup form.
 * Keywords: newsletter, subscribe, cta, email
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"wide","className":"section-newsletter","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide section-newsletter">
	<!-- wp:group {"className":"newsletter-card is-style-card has-cta-gradient-background has-background","layout":{"type":"constrained"}} -->
	<div class="wp-block-group newsletter-card is-style-card has-cta-gradient-background has-background">
		<!-- wp:heading {"textAlign":"center","level":2,"fontFamily":"display","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-display-font-family has-x-large-font-size">Become a subscriber</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Stay up to date and join our newsletter to receive the latest updates.</p>
		<!-- /wp:paragraph -->
		<!-- wp:html -->
		<form class="newsletter-form" action="#" method="post" novalidate>
			<input type="email" name="email" placeholder="Your email address" required autocomplete="email" />
			<button type="submit">Subscribe</button>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
