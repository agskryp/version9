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
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'version9_custom_background_args', array(
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
  wp_enqueue_style( 
    'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,700'
  );
  
  wp_enqueue_style(
    'bootstrap-v4.1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.0', false 
  );
  
  wp_enqueue_style( 
    'version9-style', get_stylesheet_uri(), array(), AG_VERSION, false 
  );  

  // JS
  wp_enqueue_script( 
    'version9-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true
  );
  
  wp_enqueue_script( 
    'version9-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true
  );
  
  if( is_front_page() ) {
    wp_enqueue_script( 
      'tween-max-v1.19', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), '1.19.0', true
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




/**
 * Remove WP Emoji settings
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



/**
 * Replace the default link text for excerpts
 */
function new_excerpt( $more ) {
  global $post;
  
  return '... <br> <a class="read-more pull-left" href="' . get_permalink( $post -> ID ) . '"> Continue reading &rarr;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt' );
