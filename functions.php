<?php
/**
 * Sparrow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sparrow
 */

/**
 * Table of Contents:
 * Theme Support
 * Register Sidebars(Register widget area.)
 * Register Styles
 * Register Scripts
 * Required Files
 * Filters the string in the "more" link displayed after a trimmed excerpt
 * Filter the except length to 55 words.
 * Filter the excerpt "read more" string.
 * Filter the "read more" excerpt string link to the post.
 * Post Pagination
 */

if ( ! function_exists( 'sparrow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sparrow_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sparrow, use a find and replace
		 * to change 'sparrow' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sparrow', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 640, 246.14 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'sparrow' ),
            'footer' => esc_html__( 'Footer', 'sparrow' ),
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
         * Enable support for Post Formats
         * 
         * @link https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support( 'post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'video',
            'audio',
            'chat'  
        ) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sparrow_custom_background_args', array(
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
			'height'      => 24,
			'width'       => 113,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'sparrow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparrow_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sparrow_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparrow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparrow_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'sparrow' ),
        'id'            => 'page-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'sparrow' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Posts Sidebar', 'sparrow' ),
        'id'            => 'post-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'sparrow' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'sparrow_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * Register and Enqueue Styles.
 */
function sparrow_styles() {
	
	wp_enqueue_style( 'sparrow-style', get_stylesheet_uri() );

	//CSS
    wp_enqueue_style( 'default', get_template_directory_uri(). '/assets/css/default.css', array( 'sparrow-style' ) );

    wp_enqueue_style( 'layout', get_template_directory_uri(). '/assets/css/layout.css', array( 'sparrow-style' ) );

    wp_enqueue_style( 'media-queries', get_template_directory_uri(). '/assets/css/media-queries.css', array( 'sparrow-style' ) );
    
	//Font-Awesome CSS File
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/font-awesome/css/font-awesome.min.css', array( 'sparrow-style' ) );

    //Google Fonts
    wp_enqueue_style( 'noto-sasns', 'href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i', array( 'sparrow-style' ) );
    
    wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900', array( 'sparrow-style' ) );
}

add_action( 'wp_enqueue_scripts', 'sparrow_styles' );

/**
 * Register and Enqueue Scripts.
 */
 function sparrow_scripts() {

 	//jQuery
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, '', true );
    wp_enqueue_script( 'jquery' );

    //jQuery-Migrate-1.2.1
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', array( 'jquery' ), '', true );

    //jQuery-Flexslider
    wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), '', true );

    //Doubletaptogo
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array( 'jquery' ), '', true );

    //Modernizr
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array( 'jquery' ), '', true );

    //Init
    wp_enqueue_script( 'init-js', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ), '', true );

/*
    //[if lt IE 9]
    wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array( 'jquery' ), '', true);
    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array( 'jquery' ), '', true);
    
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
    //[endif]
*/

	wp_enqueue_script( 'sparrow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sparrow-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparrow_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Post

/**
 * Filter the except length to 55 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', function(){
	return 55;
} );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
add_filter('excerpt_more', function($more) {
	return '';
});

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Reed more...</a>';
}

// Post Pagination
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	
	/*
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

the_posts_pagination( array(
	'end_size' => 2,
) ); 
