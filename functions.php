<?php
/**
 * PlumbingPress functions and definitions
 *
 * @package PlumbingPress
 */
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'PlumbingPress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


function PlumbingPress_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'PlumbingPress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'PlumbingPress' ),
		'secondary-menu' => __( 'Secondary Menu', 'PlumbingPress' ),
		'large-menu' => __( 'Large Menu', 'PlumbingPress' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

}
endif; // PlumbingPress_setup
add_action( 'after_setup_theme', 'PlumbingPress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function PlumbingPress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'PlumbingPress_content_width', 640 );
}
add_action( 'after_setup_theme', 'PlumbingPress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function PlumbingPress_widgets_init() {

		register_sidebar(array(
		'name' => esc_html__( 'Left Sidebar', 'PlumbingPress' ),
		'id' => 'left', 
		'description' => 'Displays on the left side of pages with a sidebar' ,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Right Sidebar', 'PlumbingPress' ),
		'id' => 'right', 
		'description' => 'Displays on the right side of pages with a sidebar' ,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Blog Sidebar', 'PlumbingPress' ),
		'id' => 'blog', 
		'description' => 'Displays on the side of pages in the blog section' ,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Footer Sidebar Left', 'PlumbingPress' ),
		'id' => 'footer-1', 
		'description' => 'Left Footer Area' ,
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Footer Sidebar Middle Left', 'PlumbingPress' ),
		'id' => 'footer-2', 
		'description' => 'Middle Left Footer Area (not shown on medium to small screens)' ,
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Footer Sidebar Middle Right', 'PlumbingPress' ),
		'id' => 'footer-3', 
		'description' => 'Middle Right Footer Area (not shown on medium to small screens)' ,
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Footer Sidebar Right', 'PlumbingPress' ),
		'id' => 'footer-4', 
		'description' => 'Right Footer Area' ,
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Header Sidebar', 'PlumbingPress' ),
		'id' => 'header-1', 
		'description' => 'Header (shown on large screens only)' ,
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Single Page Sidebar', 'PlumbingPress' ),
		'id' => 'single', 
		'description' => 'Single Page Sidebar' ,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

		register_sidebar(array(
		'name' => esc_html__( 'Commercial Page Sidebar', 'PlumbingPress' ),
		'id' => 'commercial', 
		'description' => 'Commercial Page Sidebar' ,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

add_action( 'widgets_init', 'PlumbingPress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function PlumbingPress_scripts() {
	wp_enqueue_style( 'foundation-min_css', get_template_directory_uri() . '/css/foundation.min.css' );
	
	wp_enqueue_style( 'PlumbingPress-style', get_stylesheet_uri() );

	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700|Montserrat:400,700|Raleway:300,500');	

	wp_enqueue_style( 'foundation-icons_css', get_template_directory_uri() . '/fonts/foundation_icons.css' );

	wp_enqueue_style( 'fontawesome-icons_css', get_template_directory_uri() . '/fonts/font-awesome.css' );

	if (is_page('home')) {
	wp_enqueue_style('owl-theme_css',get_template_directory_uri().'/css/owl.theme.css' );
	wp_enqueue_style('owl-carousel_css',get_template_directory_uri().'/css/owl.carousel.css' );}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );}

}
add_action( 'wp_enqueue_scripts', 'PlumbingPress_scripts' );

function PlumbingPress_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );

	wp_enqueue_script( 'PlumbingPress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'PlumbingPress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );

	if (is_page('home')) {
	wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'custom_js',get_template_directory_uri().'/js/custom.js', array('jquery'), '', true);}

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );

	if (is_page('home') or ('service-area') or ('contact')) {
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '3', true );
	wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );}

}

add_action( 'wp_enqueue_scripts', 'PlumbingPress_theme_js' );

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

/**
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'PlumbingPress_register_required_plugins' );

function PlumbingPress_register_required_plugins() {
	
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Advanced Custom Fields', // The plugin name.
			'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/advanced-custom-fields.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Custom Post Types UI', // The plugin name.
			'slug'               => 'custom-post-type-ui.1.1.1', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/custom-post-type-ui.1.1.1.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Contact Form 7', // The plugin name.
			'slug'               => 'contact-form-7.4.2.1', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/contact-form-7.4.2.1.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Easy Foundation Shortcodes', // The plugin name.
			'slug'               => 'easy-foundation-shortcodes.2.0', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/easy-foundation-shortcodes.2.0.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Lightweight Social Icons', // The plugin name.
			'slug'               => 'lightweight-social-icons.0.3', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/lightweight-social-icons.0.3.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'WordPress Importer', // The plugin name.
			'slug'               => 'wordpress-importer.0.6.1', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/wordpress-importer.0.6.1.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Widget Importer Exporter', // The plugin name.
			'slug'               => 'widget-importer-exporter', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/widget-importer-exporter.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Booking Calendar', // The plugin name.
			'slug'               => 'booking', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/booking.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => 'Jetpack', // The plugin name.
			'slug'               => 'jetpack.3.7', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/plugins/jetpack.3.7.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
