<?php

// Theme Setup
if( !function_exists( 'version9_setup' ) ) {
  function version9_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
      'header-main-menu'   => 'Header Menu',
      'footer-policy-menu' => 'Footer Menu'
    ) );    
  }
}
add_action( 'after_setup_theme', 'version9_setup' );


// Enqueue scripts and styles.
function version9_scripts() {
  wp_enqueue_style( 'version9-style', get_stylesheet_uri(), array(), AG_VERSION, false );  

  // JS
  if( !is_front_page() ) {
    wp_enqueue_script( 
      'version9-navigation', get_template_directory_uri() . '/js/navigation.js', array(), AG_VERSION, true
    );
  }
  
  wp_enqueue_script( 'jquery-ajax', get_template_directory_uri() . '/js/jQuery-ajax.js', array(), '221', true );

  wp_enqueue_script( 
    'version9-load-more', get_template_directory_uri() . '/js/load-more.js', array(), '202050', true
  );

  if( is_front_page() ) {
    wp_enqueue_script( 
      'tween-max-v2.1.3', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '2.1.3', true
    );    
    
    wp_enqueue_script( 
      'version9-animation', get_template_directory_uri() . '/js/animation.js', array(), '1.1.0', true 
    );
  }
  
  if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'version9_scripts' );


// Additional function partials
require get_template_directory() . '/inc/constants.php';
require get_template_directory() . '/inc/font-embedding.php';
require get_template_directory() . '/inc/metaboxes.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/template-comments.php';


// Add a pingback url auto-discovery header for single posts, pages, or attachments.
function version9_pingback_header() {
	if( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'version9_pingback_header' );


// Remove WP Emoji settings
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Replace the default setup for post excerpt
function new_excerpt( $more ) {
  global $post;

  $excerpt = '...';

  $excerpt .= '<div class="text-right">';
    $excerpt .= '<a href="' . get_permalink( $post -> ID ) . '">Continue reading &rarr;</a>';
  $excerpt .= '</div>';
  
  return $excerpt;
}
add_filter( 'excerpt_more', 'new_excerpt' );



// Deregisters contact form 7 script unless on about page
function deregister_javascript() {
  if( !is_page( 'about' ) ) wp_deregister_script( 'contact-form-7' );
}
add_action( 'wp_print_scripts', 'deregister_javascript', 100 );


// Deregisters contact form 7 stylesheet unless on about page
function deregister_stylesheet() {
  if( !is_page( 'about' ) ) wp_deregister_style( 'contact-form-7' );
}
add_action( 'wp_enqueue_scripts', 'deregister_stylesheet', 20 );


// Load blog posts via ajax
function blog_posts_loadmore_ajax_handler() {
  $args                     = [];
  $args[ 'paged' ]          = $_POST[ 'page' ] + 1;
  $args[ 'posts_per_page' ] = $_POST[ 'posts_per_page' ];
  $args[ 'category_name' ]  = $_POST[ 'category_name' ];
  $args[ 'search_value' ]   = $_POST[ 'search_value' ];

  $new_query = new WP_Query( array(
    'post_status'    => 'publish',
    'paged'          => $args[ 'paged' ],
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
function wpse200296_before_admin_bar_render() {
    global $wp_admin_bar;

    $wp_admin_bar -> remove_menu( 'customize' );
}
add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 


// TODO:
//
// - Hide front-page.php & page-portfolio.php from showing in the search results.
// - Set tabindex for header navigation, mobile functions
// - Only load required js files on proper templates
// - Rewrite load-more.js to be vanilla javascript, kill jQuery-ajax.js
// - Go through and optimize template-comments.php
//
