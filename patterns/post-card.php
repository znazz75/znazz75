<?php
/**
 * Title: Post card
 * Slug: znazz75/post-card
 * Categories: znazz75
 * Description: A single blog post card with featured image, category chip and excerpt.
 * Keywords: card, post, blog
 * Viewport Width: 1280
 * Inserter: false
 */
?>

<!-- wp:group {"className":"post-card is-style-card","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}}} -->
<div class="wp-block-group post-card is-style-card" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} /-->
	<!-- wp:post-terms {"term":"category","className":"is-style-chip"} /-->
	<!-- wp:post-title {"level":3,"isLink":true,"fontFamily":"display","fontSize":"large"} /-->
	<!-- wp:group {"className":"post-meta","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
	<div class="wp-block-group post-meta">
		<!-- wp:post-date {"format":"M j, Y","isLink":false} /-->
		<!-- wp:post-author-name {"isLink":false} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-excerpt {"moreText":"Continue reading","excerptLength":26} /-->
</div>
<!-- /wp:group -->
