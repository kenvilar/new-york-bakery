<?php
/**
 * New York Bakery functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package New_York_Bakery
 */

if ( ! function_exists( 'new_york_bakery_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function new_york_bakery_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on New York Bakery, use a find and replace
		 * to change 'new-york-bakery' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'new-york-bakery', get_template_directory() . '/languages' );
		
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
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'new-york-bakery' ),
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
		
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'new_york_bakery_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'new_york_bakery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function new_york_bakery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'new_york_bakery_content_width', 640 );
}

add_action( 'after_setup_theme', 'new_york_bakery_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function new_york_bakery_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'new-york-bakery' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'new-york-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'new-york-bakery' ),
		'id'            => 'footer-widget-1',
		'description'   => esc_html__( 'Add footer widget here.', 'new-york-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'new-york-bakery' ),
		'id'            => 'footer-widget-2',
		'description'   => esc_html__( 'Add footer widget here.', 'new-york-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'new-york-bakery' ),
		'id'            => 'footer-widget-3',
		'description'   => esc_html__( 'Add footer widget here.', 'new-york-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'new_york_bakery_widgets_init' );

function new_york_bakery_styles() {
	wp_enqueue_style( 'new-york-bakery-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'bootstrap-css',
		get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css',
		array(), get_bloginfo( 'version' ), 'all' );
	
	wp_enqueue_style( 'ionicons-css',
		get_template_directory_uri() . '/assets/bower_components/Ionicons/css/ionicons.min.css',
		array(), get_bloginfo( 'version' ), 'all' );
	
	if ( is_page( 'about-us' ) || is_page( 'about' ) ) :
		wp_enqueue_style( 'slick-css',
			get_template_directory_uri() . '/assets/bower_components/slick-carousel/slick/slick.css',
			array(), get_bloginfo( 'version' ), 'all' );
		
		wp_enqueue_style( 'slick-theme-css',
			get_template_directory_uri() . '/assets/bower_components/slick-carousel/slick/slick-theme.css',
			array(), get_bloginfo( 'version' ), 'all' );
	endif;
	
	if ( newyorkbakery_is_localhost() ) :
		wp_enqueue_style( 'custom-css',
			get_template_directory_uri() . '/assets/css/style.css',
			array(), null, 'all' );
	else :
		wp_enqueue_style( 'custom-css',
			get_template_directory_uri() . '/assets/css/style.min.css',
			array(), null, 'all' );
	endif;
}

add_action( 'wp_enqueue_scripts', 'new_york_bakery_styles' );

/**
 * Enqueue scripts and styles.
 */
function new_york_bakery_scripts() {
	
	wp_enqueue_script( 'new-york-bakery-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(), get_bloginfo( 'version' ), true );
	
	wp_enqueue_script( 'new-york-bakery-skip-link-focus-fix',
		get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js',
		array(), get_bloginfo( 'version' ), true );
	
	wp_enqueue_script( 'bootstrap-js',
		get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js',
		array( 'jquery' ), get_bloginfo( 'version' ), true );
	
	if ( is_page( 'about-us' ) || is_page( 'about' ) ) :
		wp_enqueue_script( 'timeline-slider',
			get_template_directory_uri() . '/assets/js/jquery.timelinr-0.9.6.js',
			array( 'jquery' ), get_bloginfo( 'version' ), true );
		
		wp_enqueue_script( 'slick-slider',
			get_template_directory_uri() . '/assets/bower_components/slick-carousel/slick/slick.min.js',
			array( 'jquery' ), get_bloginfo( 'version' ), true );
	endif;
	
	if ( newyorkbakery_is_localhost() ) :
		wp_enqueue_script( 'custom-js',
			get_template_directory_uri() . '/assets/js/custom.js',
			array( 'jquery' ), null, true );
	else :
		wp_enqueue_script( 'custom-js',
			get_template_directory_uri() . '/assets/js/custom.min.js',
			array( 'jquery' ), null, true );
	endif;
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'new_york_bakery_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom functions.
 */
require get_template_directory() . '/inc/custom-misc.php';

/**
 * Custom shortcodes.
 */
require get_template_directory() . '/inc/custom_shortcodes.php';

/**
 * Custom menu.
 */
require get_template_directory() . '/inc/custom_menus.php';

/**
 * Custom ACF.
 */
//require get_template_directory() . '/inc/custom-acf.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
