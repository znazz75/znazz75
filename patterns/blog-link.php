<?php
/**
 * Title: View all articles link
 * Slug: znazz75/blog-link
 * Categories: znazz75
 * Description: A "View all articles" link resolved to the site's configured posts page (Settings -> Reading), falling back to the homepage when no separate posts page is set. Never a hardcoded slug, so it works regardless of what the blog page is actually named or where WordPress is installed.
 * Keywords: blog, archive, link
 * Inserter: false
 */

$znazz75_posts_page_id = (int) get_option( 'page_for_posts' );
$znazz75_blog_url      = $znazz75_posts_page_id ? get_permalink( $znazz75_posts_page_id ) : home_url( '/' );
?>

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><a href="<?php echo esc_url( $znazz75_blog_url ); ?>">View all articles</a></p>
<!-- /wp:paragraph -->
