<?php
/**
 * Title: Latest posts grid
 * Slug: znazz75/latest-posts
 * Categories: znazz75
 * Description: Section heading with a three-column grid of recent blog posts.
 * Keywords: posts, blog, grid, latest
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"wide","className":"section-posts","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide section-posts" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"section-head","layout":{"type":"flex","justifyContent":"space-between","alignItems":"baseline","flexWrap":"wrap"},"style":{"spacing":{"margin":{"bottom":"2rem"},"blockGap":"0.5rem"}}} -->
	<div class="wp-block-group section-head" style="margin-bottom:2rem">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"section-subtitle"} -->
			<p class="section-subtitle">Latest</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontFamily":"display","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-display-font-family has-xx-large-font-size">Fresh from the blog</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><a href="#">View all articles</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":5,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"posts-grid"} -->
	<div class="wp-block-query posts-grid">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
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
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
