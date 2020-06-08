<?php

/**
 * version9 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package version9
 */
if( !function_exists( 'version9_setup' ) ) {

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function version9_setup() {
    
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
      'menu-1' => esc_html__( 'Primary', 'version9' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

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
}
add_action( 'after_setup_theme', 'version9_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function version9_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS[ 'content_width' ] = apply_filters( 'version9_content_width', 640 );
}
add_action( 'after_setup_theme', 'version9_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function version9_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'version9' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'version9' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'version9_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function version9_scripts() {
  
  // CSS
  wp_enqueue_style( 'version9-style', get_stylesheet_uri(), array(), AG_VERSION, false );  

  // JS
  if( !is_front_page() ) {
    wp_enqueue_script( 
      'version9-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true
    );
  }
  
  wp_enqueue_script( 
    'version9-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true
  );

  wp_enqueue_script( 
    'jquery-ajax', get_template_directory_uri() . '/js/jQuery-ajax.js', array(), '221', true
  );

  wp_enqueue_script( 
    'version9-load-more', get_template_directory_uri() . '/js/load-more.js', array(), '202050', true
  );

 
  
  if( is_front_page() ) {
    wp_enqueue_script( 
      'tween-max-v2.1.3', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '2.1.3', true
    );    
    
    wp_enqueue_script( 
      'version9-animation', get_template_directory_uri() . '/js/animation.js', array(), '1.0.0', true 
    );
  }
  
  if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'version9_scripts' );



require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/template-comments.php';


require get_template_directory() . '/inc/constants.php';
require get_template_directory() . '/inc/metaboxes.php';




/**
 * Remove WP Emoji settings
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



/**
 * Replace the default setup for post excerpt
 */
function new_excerpt( $more ) {
  global $post;

  $excerpt = '...';

  $excerpt .= '<div class="v9-text-right">';
  $excerpt .= '<a href="' . get_permalink( $post -> ID ) . '">Continue reading &rarr;</a>';
  $excerpt .= '</div>';
  
  return $excerpt;
}
add_filter( 'excerpt_more', 'new_excerpt' );






/**
 * Best embedding of google fonts
 * <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com -->
 */
function themeprefix_load_fonts() { 
  ?> 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,300,700" as="fetch" crossorigin="anonymous"> 
    <script type="text/javascript"> 
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Lato:100,300,700",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
    </script>
  <?php
}
add_action( 'wp_head', 'themeprefix_load_fonts' ); 


// Deregisters contact form 7 script unless on about page
function deregister_javascript() {
  if( !is_page( 'about' ) ) {
    wp_deregister_script( 'contact-form-7' );
  }
}
add_action( 'wp_print_scripts', 'deregister_javascript', 100 );



// Deregisters contact form 7 stylesheet unless on about page
function deregister_stylesheet() {
  if( !is_page( 'about' ) ) {
    wp_deregister_style( 'contact-form-7' );
  }
}
add_action( 'wp_enqueue_scripts', 'deregister_stylesheet', 20 );





/**
 * Load blog posts via ajax
 */
function blog_posts_loadmore_ajax_handler() {
  $args                     = [];
  $args[ 'paged' ]          = $_POST[ 'page' ] + 1;
  $args[ 'posts_per_page' ] = $_POST[ 'posts_per_page' ];
  $args[ 'category_name' ]  = $_POST[ 'category_name' ];
  $args[ 'search_value' ]   = $_POST[ 'search_value' ];

  $new_query = new WP_Query( array(
    'paged'          => $args[ 'paged' ],
    'post_status'    => 'publish',
    // 'post_type'      => 'post',
    'posts_per_page' => $args[ 'posts_per_page' ],
    'category_name'  => $args[ 'category_name' ],
    's'              => $args[ 'search_value' ]
  ) );
  
  while( $new_query -> have_posts() ) { 
    $new_query -> the_post();

    // Use a partial file from your theme
    include( 'partials/excerpt-container.php' );
  }
  
  wp_reset_query();
  
  die; 
}

add_action( 'wp_ajax_loadblogposts', 'blog_posts_loadmore_ajax_handler' );
add_action( 'wp_ajax_nopriv_loadblogposts', 'blog_posts_loadmore_ajax_handler' );




// Remove customize link in admin header bar
add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 

function wpse200296_before_admin_bar_render()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('customize');
}

