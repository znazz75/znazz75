<?php
/**
 * Title: Hero with search
 * Slug: znazz75/hero
 * Categories: znazz75
 * Description: Gradient hero with headline, subtext and a search bar.
 * Keywords: hero, search, header
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"tagName":"section","className":"site-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group site-hero has-hero-gradient-background has-background">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"fontFamily":"display","fontSize":"hero"} -->
		<h1 class="wp-block-heading has-text-align-center has-display-font-family has-hero-font-size">Code that actually runs.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"color":{"text":"rgba(255,255,255,0.85)"}}} -->
		<p class="has-text-align-center has-large-font-size" style="color:rgba(255,255,255,0.85)">Guides, tools and snippets for developers and designers — no signup, no setup.</p>
		<!-- /wp:paragraph -->
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search tutorials, tools and snippets…","buttonText":"Search","buttonPosition":"button-inside","className":"site-search","fontSize":"medium"} /-->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-pill","backgroundColor":"base","textColor":"contrast"} -->
			<div class="wp-block-button is-style-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button">Browse the tools</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","textColor":"base"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button">Start a tutorial</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
