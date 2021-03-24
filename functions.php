<?php
/**
 * antiban functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package antiban
 */

if ( ! function_exists( 'antiban_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function antiban_setup() {
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
		register_nav_menus(
			array(
				'menu-top' => esc_html__( 'Primary', 'antiban' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'antiban_setup' );

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//Remove wlmanifest.xml from head
remove_action( 'wp_head', 'wlwmanifest_link' );

/**
 * Enqueue scripts and styles.
 */
function antiban_scripts() {
	wp_enqueue_style( 'swiper-style', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false);

	wp_deregister_script( 'jQuery' );

	wp_enqueue_script( 'lazy-script', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js', array(), false, true);
	wp_enqueue_script( 'swiper-script', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script( 'micromodal-script',  'https://unpkg.com/micromodal/dist/micromodal.min.js', false, true);
	wp_enqueue_script( 'sweetalert-script',  'https://unpkg.com/sweetalert/dist/sweetalert.min.js', false, true);
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/index.js', array(), false, true);
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'main-script', 'wp', $translation_array );
	
	wp_enqueue_script( 'gsap-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array(), false, true);
	wp_enqueue_script( 'scroll-trigger-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array(), false, true);
	wp_enqueue_script( 'animations-script', get_template_directory_uri() . '/js/animations.js', array('gsap-script'), false, true);
}
add_action( 'wp_enqueue_scripts', 'antiban_scripts' );

