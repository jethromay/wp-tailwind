<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-starter
 */

get_header();
?>

<section class="error-404 not-found">
	<header>
		<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
	</header><!-- .page-header -->

	<div>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'theme' ); ?>
		</p>

		<?php get_search_form(); ?>
	</div><!-- .page-content -->
</section><!-- .error-404 -->

<?php
get_footer();