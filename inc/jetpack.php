<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Community_Foundation_Board
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function foundationboard_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'foundationboard_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

	// Add theme support for site logos
	add_image_size( 'foundationboard-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'foundationboard-logo' ) );

	// Add theme support for testimonials
	add_theme_support( 'jetpack-testimonial' );
}
add_action( 'after_setup_theme', 'foundationboard_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function foundationboard_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'components/post/content', 'search' );
		else :
		    get_template_part( 'components/post/content', get_post_format() );
		endif;
	}
}

/**
 * Return early if Site Logo is not available.
 */
function foundationboard_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

function foundationboard_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}
