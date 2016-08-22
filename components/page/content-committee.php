<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Community_Foundation_Board
 */

$access_levels = get_access_level ();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">Committees</h1>
		<span class="back-to-list-link"><i class="fa fa-caret-left" aria-hidden="true"></i><a href="/committees/">Back to Full List of Committees</a></span>
	</header>
	<div class="entry-content committee-content">
	<?php 
	if ($access_levels['access_level'] === 'no_access' || $access_levels['access_level'] === 'other') { ?>
		<br /> You do not have access to view this committee.
		<?php } else {
			$postID = get_the_id();
			$committe_roles = array ();
			$cats = wp_get_post_terms( $postID, 'associated-commitee' );
			if (!empty($cats)) {
				foreach ($cats as $key => $value) {
					$committee_roles[] = $value->name;
				}
			}
		$should_access = false;
if ( $access_levels['access_level'] === 'all_access' || $access_levels['access_level'] === 'board') {
	$should_access = true;
}
if ($access_levels['access_level'] === 'committee' ) {
	foreach ($access_levels['committee_access'] as $key => $value) {
		if ( in_array( $value, $committee_roles) ) {$should_access = true;}
	}
}

		/*check if display this user based on the logged in users role*/
	if ( $should_access ) { ?>
		<?php the_title( '<h2 class="committee-title">', '</h1>' ); ?>
		<?php 
		$sub_title = get_field( 'committee_sub-title' );
		$meeting_materials = get_field( 'meeting_materials' );
		$meeting_minutes = get_field( 'meeting_minutes' );
		$related_materials = get_field( 'related_materials' );
		?>
		<?php
			the_content();

			?>
<?php if ($meeting_materials) { ?>
	<h2 class="section-title">Meeting Materials</h2>
	<div class="meeting-materials committee-section">
	<?php echo $meeting_materials; ?>
	</div>
<?php } ?>
<?php if ($meeting_minutes) { ?>
	<h2 class="section-title">Meeting Minutes</h2>
	<div class="meeting-minutes committee-section">
	<?php echo $meeting_minutes; ?>
	</div>
<?php } ?>
<?php if ($related_materials) { ?>
	<h2 class="section-title">Related Materials</h2>
	<div class="related-materials committee-section">
	<?php echo $related_materials; ?>
	</div>
<?php } ?>
<?php } else { ?>
<br /> You do not have access to view this committee
<?php }  
} ?>

			<?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foundationboard' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'foundationboard' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article><!-- #post-## -->