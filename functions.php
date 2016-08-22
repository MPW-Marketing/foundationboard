<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Community_Foundation_Board
 */

if ( ! function_exists( 'foundationboard_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foundationboard_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'foundationboard' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'foundationboard', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'foundationboard-featured-image', 640, 9999 );
	add_image_size( 'foundationboard-hero', 1280, 1000, true );
	add_image_size( 'foundationboard-thumbnail-avatar', 100, 100, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top' => esc_html__( 'Top', 'foundationboard' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foundationboard_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
    
     // Enable support for Custom Logo   
    add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 40,
	'flex-height' => true,
	'flex-width'  => true,
) );
}
endif;
add_action( 'after_setup_theme', 'foundationboard_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foundationboard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foundationboard_content_width', 640 );
}
add_action( 'after_setup_theme', 'foundationboard_content_width', 0 );

function foundationboard_the_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foundationboard_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foundationboard' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name' => 'Footer Column 1',
        'id' => 'footer_widget_1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 2',
        'id' => 'footer_widget_2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 3',
        'id' => 'footer_widget_3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 4',
        'id' => 'footer_widget_4',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Header Right Side',
        'id' => 'header_right_widget',
        'before_widget' => '<div class="header-right-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="header-widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Copyright Widget Left',
        'id' => 'footer_copyright_left',
        'before_widget' => '<div class="footer-copyright-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-copyright-widget-title">',
        'after_title' => '</h3>',
    ) );
        register_sidebar( array(
        'name' => 'Footer Copyright Widget Right',
        'id' => 'footer_copyright_right',
        'before_widget' => '<div class="footer-copyright-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-copyright-widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'foundationboard_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foundationboard_scripts() {
	wp_enqueue_style( 'foundationboard-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'foundationboard-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'foundationboard-scripts', get_template_directory_uri() . '/assets/js/foundation_board.js', array(), '20151215', true );
	wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/assets/js/responsive-nav.js', array(), '20151215', true );
		wp_register_script( 'select2', get_template_directory_uri() . '/assets/js/select2.js', array('jquery'), '4.0.3', true );
		wp_register_script( 'listjs', get_template_directory_uri() . '/assets/js/list.js', array('jquery'), '1.1.1', true );
		wp_register_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '1.1.1', true );
	wp_enqueue_script( 'foundationboard-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foundationboard_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_filter( 'walker_nav_menu_start_el', 'menu_image_nav_menu_item_filter_2' , 11, 4 );

function menu_image_nav_menu_item_filter_2( $item_output, $item, $depth, $args ) {
$item_output = str_replace('</span>', '</span><span class="menu-image-container">', $item_output);
$item_output = str_replace('</a>', '</span></a>', $item_output);

		return '<div class="menu-block">'.$item_output.'</div>';
	}

add_filter('widget_text', 'do_shortcode');

add_action( 'init', 'blockusers_init' );
function blockusers_init() {
if ( is_admin() && ! current_user_can( 'create_users' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
wp_redirect( home_url() );
exit;
}
}