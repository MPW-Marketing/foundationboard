<?php
/**
 * The template for displaying committee pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Community_Foundation_Board
 */

get_header(); ?>

	<div id="primary" class="content-area has-sidebar">
		<main id="main" class="site-main" role="main">
<?php 
			while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'committee' );


			endwhile; // End of the loop.

		
			?>

		</main>
		<?php
if ( is_active_sidebar( 'committee_sidebar' ) ) { ?>
	<aside id="secondary" class="widget-area committee-sidebar" role="complementary">
		<?php dynamic_sidebar( 'committee_sidebar' ); ?>
	</aside>

<?php } ?>
	</div>
<?php
get_footer();