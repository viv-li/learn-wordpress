<?php /* Template Name: Page with Sections Template */ ?>
<?php
/**
 * The front page template modified so front page sections can be
 * shoved into other pages.
 *
 * Only use for static pages.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap wrap-like-front-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
// Get each of our panels and show the post data.
if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

	/**
	 * Filter number of front page sections in Twenty Seventeen.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
	global $twentyseventeencounter;

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$twentyseventeencounter = $i;
		twentyseventeen_front_page_section( null, $i );
	}
endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

<?php get_footer();
