<?php
/**
 * maddieblack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maddieblack
 */

if ( ! function_exists( 'maddieblack_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maddieblack_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on maddieblack, use a find and replace
		 * to change 'maddieblack' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'maddieblack', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'maddieblack' ),
			'side-menu' => __( 'Side', 'maddieblack' ),
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
		add_theme_support( 'custom-background', apply_filters( 'maddieblack_custom_background_args', array(
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
add_action( 'after_setup_theme', 'maddieblack_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maddieblack_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'maddieblack_content_width', 640 );
}
add_action( 'after_setup_theme', 'maddieblack_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maddieblack_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maddieblack' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'maddieblack' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'maddieblack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maddieblack_scripts() {
	wp_enqueue_style( 'maddieblack-style', get_stylesheet_uri() );

	wp_enqueue_style( 'maddieblack-custom', get_template_directory_uri() . '/css/custom.css');

	wp_enqueue_script( 'maddieblack-script', get_template_directory_uri() . '/js/progressbar.js');

}
add_action( 'wp_enqueue_scripts', 'maddieblack_scripts' );


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


// date formatting function
function nice_date($date) {
	// return back the date and change the format
	echo date("F N Y", strtotime($date));
}

// formatting background image function
function nice_background($image_field) {
	// put in the image field, and it returns it to us in a formatted fashion
  echo 'background-image: url(' . get_field($image_field) . ')' ;

}

function next_background($next_image) {
	echo 'background-image: url(' . get_field($image_field) . ')' ;
}

// formatting background image function
function project_background($image) {
	// put in the image field, and it returns it to us in a formatted fashion
  echo 'background-image: url(' . get_field($image) . ')' ;

}

// Add Custom Post Type: Bookshelf
function add_bookshelf() {

	$labels = array(
		'name'                  => _x( 'Bookshelf', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Bookshelf', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'bookshelf', $args );

}
add_action( 'init', 'add_bookshelf', 0 );

// Register Custom Post Type: Playlists
function add_playlists() {

	$labels = array(
		'name'                  => _x( 'Playlists', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Playlist', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'playlist', $args );

}
add_action( 'init', 'add_playlists', 0 );

// Register Custom Post Type: Playlists
function add_maps() {

	$labels = array(
		'name'                  => _x( 'Maps', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Map', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'map', $args );

}
add_action( 'init', 'add_maps', 0 );



// Register Custom Post Type: Projects
function add_projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'add_projects', 0 );

// Changing post header background colors
function single_header_background() {
	$post->ID;
	$bg_color = get_field('background_color', $post_id);
	echo 'background-color:' . $bg_color;
}

// Changing progress bar color
function progressbar_color() {
	$post->ID;
	$bg_color = get_field('background_color', $post_id);
	echo 'background-color:' . $bg_color;
}

// Pagination
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pagination\">";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}