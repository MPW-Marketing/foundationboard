<?php
/**
 * The template used for displaying hero content.
 *
 * @package Community_Foundation_Board
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="foundationboard-hero">
		<?php the_post_thumbnail( 'foundationboard-hero' ); ?>
	</div>
<?php endif; ?>
