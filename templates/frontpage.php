<?php
/**
 * Template Name: Front Page
 *
 * @package ONEmerging_Tech
 */
get_header(); ?>


	<div id="primary" class="content-area no-sidebar pure-u-4-5">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/page/content', 'notitle' ); ?>
			<?php endwhile; ?>
		</main>
	</div>

<?php get_footer(); ?>
