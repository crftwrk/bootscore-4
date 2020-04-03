<?php
/**
 * Bootscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootscore
 */
 
// Register Nav Walker class_alias
require_once('inc/class-wp-bootstrap-navwalker.php');

// Register Comment List
require_once('inc/comment-list.php');


if ( ! function_exists( 'bootscore_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bootscore_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bootscore, use a find and replace
		 * to change 'bootscore' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bootscore', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Main Menu', 'bootscore' ),
			'secondary' => esc_html__( 'Footer Menu', 'bootscore' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bootscore_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bootscore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootscore_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bootscore_content_width', 640 );
}
add_action( 'after_setup_theme', 'bootscore_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootscore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bootscore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bootscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 border-0 bg-light">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title card-title border-bottom py-2">',
		'after_title'   => '</h2>',
	) );
	
    // Top Nav Search
    register_sidebar(array(
        'name' => esc_html__('Top Nav Search', 'bootscore' ),
        'id' => 'top-nav-search',
        'description' => esc_html__('Add widgets here.', 'bootscore' ),
        'before_widget' => '<div class="top-nav-search pl-lg-3">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="card-header widget-title">',
        'after_title' => '</h2>'
    ));
    // Top Nav Search End

    // Top Nav Module
    register_sidebar(array(
        'name' => esc_html__('Top Nav Module', 'bootscore' ),
        'id' => 'top-nav-module',
        'description' => esc_html__('Add widgets here.', 'bootscore' ),
        'before_widget' => '<div class="top-nav-module pl-3">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="card-header widget-title">',
        'after_title' => '</h2>'
    ));
    // Top Nav Module End
    
    // Footer 1
    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'bootscore' ),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'bootscore' ),
        'before_widget' => '<div class="footer_widget mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    // Footer 1 End
    
    // Footer 2
    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'bootscore' ),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'bootscore'),
        'before_widget' => '<div class="footer_widget mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    // Footer 2 End
    
    // Footer 3
    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'bootscore' ),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'bootscore'),
        'before_widget' => '<div class="footer_widget mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    // Footer 3 End
    
    // Footer 4
    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'bootscore' ),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'bootscore'),
        'before_widget' => '<div class="footer_widget mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    // Footer 4 End
    
    
    // 404 Page
    register_sidebar(array(
        'name' => esc_html__('404 Page', 'bootscore' ),
        'id' => '404-page',
        'description' => esc_html__('Add widgets here.', 'bootscore'),
        'before_widget' => '<div class="footer_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));
    // 404 Page End
    
}
add_action( 'widgets_init', 'bootscore_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bootscore_scripts() {
	// Style CSS
	wp_enqueue_style( 'bootscore-style', get_stylesheet_uri() );

	// Bootstrap	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/lib/bootstrap.min.css');
	
	// Fontawesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/lib/fontawesome.min.css');

	// Theme JS
	wp_enqueue_script( 'bootscore-script', get_template_directory_uri() . '/js/theme.js', array(), '20151215', true );
	
	// Custom JS
	wp_enqueue_script( 'bootscore-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	
	// Bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array(), '20151215', true );
	
	// Cookie Consent JS
	wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/lib/cookie.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootscore_scripts' );



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


// Amount of posts in category
function wpsites_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'wpsites_query' );
// Amount of posts in category End


// Pagination Categories
function bootscore_pagination($pages = '', $range = 2) 
{  
	$showitems = ($range * 2) + 1;  
	global $paged;
	if($pages == '')
	{
		global $wp_query; 
		$pages = $wp_query->max_num_pages;
	
		if(!$pages)
			$pages = 1;		 
	}   
	
	if(1 != $pages)
	{
	    echo '<nav aria-label="Page navigation" role="navigation">';
        echo '<span class="sr-only">Page navigation</span>';
        echo '<ul class="pagination justify-content-center ft-wpbs mb-4">';
		
        // echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">Page '.$paged.' of '.$pages.'</span></li>';
	
	 	if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'" aria-label="First Page">&laquo;</a></li>';
	
	 	if($paged > 1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Previous Page">&lsaquo;</a></li>';
	
		for ($i=1; $i <= $pages; $i++)
		{
		    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				echo ($paged == $i)? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>'.$i.'</span></li>' : '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'"><span class="sr-only">Page </span>'.$i.'</a></li>';
		}
		
		if ($paged < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Next Page">&rsaquo;</a></li>';  
	
	 	if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'" aria-label="Last Page">&raquo;</a></li>';
	
	 	echo '</ul>';
        echo '</nav>';
        // echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';	 	
	}
}
//Pagination Categories End


// Pagination Buttons Single Posts
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="page-link"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
// Pagination Buttons Single Posts End


// Removes [...] from excerpt
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
// Removes [...] from excerpt End


// Read more in List, removes <p> around excerpt
remove_filter('the_excerpt', 'wpautop');
// Read more in List, removes <p> around excerpt End


// Breadcrumb
function the_breadcrumb() {

	// Code
	if(!is_home()) {
		echo '<nav class="breadcrumb mb-4 bg-light">';
		echo '<a href="'.home_url('/').'">'.('<i class="fas fa-home"></i>').'</a><span class="divider">&nbsp;/&nbsp;</span>';
		if (is_category() || is_single()) {
			the_category(' <span class="divider">&nbsp;/&nbsp;</span> ');
			if (is_single()) {
				echo ' <span class="divider">&nbsp;/&nbsp;</span> ';
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
		echo '</nav>';
	}
}
add_filter( 'breadcrumbs', 'breadcrumbs' );
// Breadcrumb End


// Comment Button
function bootscore_comment_form( $args ) {
    $args['class_submit'] = 'btn btn-outline-primary'; // since WP 4.1    
    return $args;    
}
add_filter( 'comment_form_defaults', 'bootscore_comment_form' );
// Comment Button End


// Password protected form
function bootscore_pw_form () {
	$output = '
		  <form action="'.get_option('siteurl').'/wp-login.php?action=postpass" method="post" class="form-inline">'."\n"
		//.'<label for="post_password">Bitte Passwort eingeben:</label>'."\n"
		.'<input name="post_password" type="password" size="" class="form-control mr-2 my-1" placeholder="' . __('Password', 'bootscore') . '"/>'."\n"
		.'<input type="submit" class="btn btn-outline-primary my-1" name="Submit" value="' . __('Submit', 'bootscore') . '" />'."\n"
		.'</p>'."\n"
		.'</form>'."\n";
	return $output;
}
add_filter("the_password_form","bootscore_pw_form");
// Password protected form End


