<?php
/**
 * Title: Back to homepage button
 * Slug: znazz75/home-link
 * Categories: znazz75
 * Description: A pill button linking to the site's homepage, resolved via home_url() so it always works — including when WordPress is installed in a subdirectory.
 * Keywords: home, button, link
 * Inserter: false
 */
?>

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
	<!-- wp:button {"className":"is-style-pill"} -->
	<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to homepage</a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
