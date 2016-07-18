<?php
/**
 * Template Name: Front Page
 *
 * @package Community_Foundation_Board
 */
get_header(); ?>


	<div id="primary" class="content-area pure-u-4-5">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/features/hero-image/content', 'hero' ); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'components/features/testimonials/testimonials' ); ?>
		</main>
	</div>

<?php get_footer(); ?>
