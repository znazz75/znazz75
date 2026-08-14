=== znazz75 ===
Contributors: znazz75
Tags: blog, news, one-column, two-columns, right-sidebar, wide-blocks, block-patterns, full-site-editing, editor-style, custom-colors, custom-logo, featured-images
Requires at least: 6.4
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A modern WordPress block theme with a content-first, two-column blog layout. Structural layout inspired by shareus.com; colors and shapes inspired by codeshack.io.

== Description ==

znazz75 is a modern full-site-editing (FSE) block theme built entirely on core WordPress blocks — no page builder required. It pairs the editorial, content-first structure of shareus.com (sticky header, hero band, a row of feature/product cards, a two-column blog grid with a persistent sidebar, and a multi-column footer) with the clean slate-and-blue palette, soft shadows, rounded cards and code-friendly typography of codeshack.io.

Highlights:

* Gradient hero with integrated search and a stats strip
* Feature/product cards section (three-card grid with icon, text and CTA — modelled on shareus.com's product row)
* Latest posts grid with category chips, hover lift and equal-height cards
* Blog index / archive / search results in a two-column layout with a sticky sidebar (search, recommended posts, categories, tag cloud — modelled on shareus.com's sidebar)
* Single post template with meta chips, tag list, post navigation and threaded comments
* Multi-column footer with page list, categories, social icons and a newsletter signup form
* Fluid typography and fluid spacing throughout, defined entirely in theme.json
* A bundled "Dark" style variation (Appearance → Editor → Styles) using codeshack.io's dark palette
* Reusable block patterns: hero, stats, products, latest posts, newsletter, post card, sidebar
* Custom block styles: Pill buttons, Chip post-terms, Card groups/columns, Rounded images
* No external font, script or tracking requests — every asset is self-hosted or a system font, which keeps the theme fast and GDPR/DSGVO-friendly out of the box
* A `core/code` and `core/preformatted` style so inline code and code blocks already look the part before you add a syntax highlighter (see Recommended Plugins below)

== Installation ==

1. In your admin panel, go to Appearance > Themes.
2. Click Add New, then Upload Theme.
3. Choose the znazz75.zip file and click Install Now.
4. Activate the theme.
5. Optional: go to Appearance > Editor > Styles and pick the "Dark" style variation if you prefer codeshack.io's dark palette.

For full-site editing, WordPress 6.4 or newer is recommended. Local testing was done on XAMPP (Apache/MySQL/PHP 8.2+).

== Recommended Plugins ==

The theme itself only handles layout, typography and color — it deliberately ships without a plugin-territory feature bolted on (search, comments spam control, forms, etc. all vary by taste). To match specific functionality seen on shareus.com and codeshack.io, install whichever of these free/freemium plugins covers what you need. All are available on WordPress.org unless noted otherwise.

= Displaying source code in posts (codeshack.io's core feature) =

* **Enlighter – Customizable Syntax Highlighter** — free, wordpress.org. Adds a proper `[enlighter]` code block with language-aware syntax highlighting, line numbers and a one-click "copy" button, close to what codeshack.io uses for its snippets. Recommended default choice.
* **Code Syntax Block** — free, wordpress.org. A native Gutenberg block alternative if you prefer editing code directly inside the block editor instead of a shortcode/classic view.
* The theme already styles the core `Code` and `Preformatted` blocks (rounded corners, monospace font, dark background) so both plugins above inherit a matching look with no extra CSS.

= Cookie / consent banner (shareus.com shows one on every visit) =

* **Complianz – GDPR/CCPA Cookie Consent** — free, wordpress.org. Handles the EU/DSGVO cookie banner, consent logging and script blocking — relevant for a .de-registered site.

= Related / recommended posts =

* **Contextual Related Posts** — free, wordpress.org. Populates a "related articles" block by category/tag similarity; pairs well with the theme's sidebar "Recommended" card, which currently lists latest posts.
* **YARPP (Yet Another Related Posts Plugin)** — free, wordpress.org. Alternative with more tuning options for relatedness.

= Site search =

* **Relevanssi – A Better Search** — free, wordpress.org. Improves core WordPress search relevance/ranking, useful given both reference sites put a search bar front and center (header, hero and 404 template).
* **Ajax Search Lite** — free, wordpress.org. Adds live, as-you-type search results if you want the header/hero search bar to behave more like a modern instant-search box.

= Table of contents for long tutorials =

* **Easy Table of Contents** — free, wordpress.org. Auto-generates a jump-to-section list from post headings — handy for long, codeshack.io-style step-by-step tutorials.

= Contact / support forms =

* **WPForms Lite** — free, wordpress.org. Covers a "Contact Us" / "Support Center" page like the one in shareus.com's footer.
* **Contact Form 7** — free, wordpress.org. Lighter-weight alternative.

= Newsletter signup =

* **Newsletter** by Stefano Lissa & The Newsletter Team — free, wordpress.org. Wire this up to the theme's bundled "Newsletter CTA" pattern and footer signup form (currently a static HTML form with no back end).
* **MailPoet** — free tier, wordpress.org. Alternative with built-in email sending for smaller lists.

= Share buttons on posts =

* **AddToAny Share Buttons** — free, wordpress.org. Adds share-this-post buttons under article content, distinct from the footer "follow us" social icons the theme already includes via the Social Links block.

= SEO =

* **Rank Math SEO** — free tier, wordpress.org. Or **Yoast SEO** (free) — either covers meta titles/descriptions, sitemaps and Open Graph tags for both the blog and any product/tool pages.

= Software downloads (if you sell/distribute tools like shareus.com does) =

* **Easy Digital Downloads** — free core plugin, wordpress.org. Turns a page into a product listing with a download/purchase flow, matching shareus.com's "Excel Repair / Data Recovery / PowerPoint Repair" product cards (the theme's bundled "Products grid" pattern gives you the visual layout; this plugin adds the actual commerce logic).

= Front-end dark-mode toggle =

* The theme ships a "Dark" **style variation** you (the site owner) can select once in Appearance > Editor > Styles — this is a global, editor-side choice, not a per-visitor toggle.
* If you want a visitor-facing light/dark switch like codeshack.io's header toggle, **WP Dark Mode** — free, wordpress.org — adds a front-end toggle button and remembers each visitor's preference.

= Self-hosted Google Fonts (optional) =

* This theme uses only system fonts by design (see Description) — no plugin needed. If you later add a Google Font via the Site Editor, install **OMGF – Optimize My Google Fonts** — free, wordpress.org — first, so the font is proxied/self-hosted instead of loaded from Google's CDN.

== Frequently Asked Questions ==

= Does this theme require any of the recommended plugins to work? =

No. The theme is fully functional on its own — the plugins above only add functionality that lives outside a theme's scope (syntax highlighting, forms, e-commerce, consent management, etc.).

= Why doesn't the newsletter/subscribe form actually send anything? =

The forms in the "Newsletter CTA" pattern and footer are intentionally plain HTML placeholders (`<form action="#">`) with no back end, so activating the theme never silently emails or stores visitor data. Connect a plugin such as Newsletter or MailPoet (see Recommended Plugins) to make them functional.

= Is this theme translation-ready? =

Yes — all UI strings use the `znazz75` text domain and standard WordPress i18n functions.

== Copyright ==

znazz75 WordPress theme, Copyright 2026 znazz75.
znazz75 is distributed under the terms of the GNU GPL v2 (or later). See LICENSE for the full text.

This theme bundles no third-party fonts, images, icon fonts or JavaScript libraries — its inline SVG icons were authored for this theme. It does not include a copy of any code, markup, text or imagery from shareus.com or codeshack.io; both sites were used only as visual/structural references (layout, color palette, corner radii, shadow style) during design.

== Changelog ==

= 1.0.1 =
* Fixed a large batch of "Block contains unexpected or invalid content" editor errors: many block comments across the templates, template parts and patterns declared padding/margin/color/font-size attributes that were never mirrored into the saved HTML tag, so the block editor's validator rejected them (they still rendered on the front end, just without that spacing/style). Every template, template part and pattern was audited and the mismatches corrected.
* Fixed the single post Comments block: it was missing its outer wrapper element (a second, structural validation failure) and only rendered the "leave a reply" form — existing/threaded comments never actually displayed on the front end despite being advertised. It now includes a proper comment template (avatar, author, date, content, reply link) and pagination, and threaded comments display correctly.
* Fixed the packaged release zip: it was built with PowerShell's `Compress-Archive`, which wrote internal entry paths with backslashes instead of the forward slashes the ZIP format requires, so WordPress couldn't see `style.css` inside the theme folder and refused to install it ("The theme is missing the style.css stylesheet"). The zip is now built with correct forward-slash paths.
* Fixed `LICENSE`, which contained a raw HTTP redirect page instead of the GPLv2 license text.
* Fixed `screenshot.png`, which still showed placeholder branding from an earlier working name.
* Fixed a responsive layout bug where the header's search field and "Subscribe" button would overflow and wrap illegibly on viewports narrower than ~1024px, and content could sit flush against the viewport edge on any screen narrower than the theme's content width (missing root padding).

= 1.0.0 =
* Initial public release.
