<?php
/**
 * FPSBase First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package FPSBase
 */
if ( ! function_exists( 'FPSBase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function FPSBase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Inspect It First, use a find and replace
		 * to change 'FPSBase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'FPSBase', get_template_directory() . '/languages' );

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

        register_nav_menus( array(
            'menu-1' => esc_html__( 'Header', 'FPSBase' ),
            'menu-2' => esc_html__( 'Footer', 'FPSBase' ),
        ));

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
	}
endif;
add_action( 'after_setup_theme', 'FPSBase_setup' );

/**
*** Enqueue scripts and styles.
**/
function FPSBase_scripts() {
    //wp_enqueue_script( 'jquery-masonry' );
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,500,700');
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css', null, '1.0', false );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/FPSBase.js', array('jquery'), '0.1', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
}
add_action( 'wp_enqueue_scripts', 'FPSBase_scripts' );

/**
*** Shortcodes Theme
**/
require('inc/shortcodes.php');

/**
*** Custom Pagination Function
**/
require('inc/pagination.php');

/**
*** Social Shared Icons Function
**/
require('inc/shared-social.php');

/**
*** Author Fields
**/
require('inc/author-fields.php');

/**
*** Yoast Meta Description and page titles
**/
require('inc/yoast-meta-description.php');
