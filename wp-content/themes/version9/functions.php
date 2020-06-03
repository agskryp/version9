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
    // add_theme_support( 'custom-background', apply_filters( 'version9_custom_background_args', array(
    //   'default-color' => 'ffffff',
    //   'default-image' => '',
    // ) ) );

    // Add theme support for selective refresh for widgets.
    // add_theme_support( 'customize-selective-refresh-widgets' );

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
// function version9_widgets_init() {
//   register_sidebar( array(
//     'name'          => esc_html__( 'Sidebar', 'version9' ),
//     'id'            => 'sidebar-1',
//     'description'   => esc_html__( 'Add widgets here.', 'version9' ),
//     'before_widget' => '<section id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</section>',
//     'before_title'  => '<h2 class="widget-title">',
//     'after_title'   => '</h2>',
//   ) );
// }
// add_action( 'widgets_init', 'version9_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function version9_scripts() {
  
  // CSS
  wp_enqueue_style( 
    'version9-style', get_stylesheet_uri(), array(), AG_VERSION, false 
  );  

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
 * Replace the default link text for excerpts
 */
function new_excerpt( $more ) {
  global $post;
  
  return '... <br> <a class="read-more pull-left" href="' . get_permalink( $post -> ID ) . '"> Continue reading &rarr;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt' );






/**
 * Best embedding of google fonts
 */

function themeprefix_load_fonts() { 
  ?> 
    <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com --> 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,300,700" as="fetch" crossorigin="anonymous"> 
    <script type="text/javascript"> 
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Lato:100,300,700",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
    </script>
    <!-- End of code snippet for Google Fonts -->
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








function get_parameter_array( $post, $is_event = false ) {

  $args = [];
  $args['paged'] = $post['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
  $args['post_type'] = $post['action'];
  $args['posts_per_page'] = $post['posts_per_page'];
  $args['category_name'] = $post['category_name'];
  $args['tag'] = $post['tag'];
  $args['post__not_in'] = explode(',', $post['excluded_ids']);

  return $args;
}




/**
 * RCC video and podcast loadmore script
 */
function rcc_video_podcast_loadmore_ajax_handler(){


  // prepare our arguments for the query
  $args = get_parameter_array($_POST);

  // First page is already displayed, start at page 2
  
  $paged = $args['paged'] + 1;

  



  $new_query = new WP_Query( array(
      'paged'          => $paged,
      'post_status'    => 'publish',
      'post_type'      => 'post',
      'posts_per_page' => '6', )
  );

  


  if( $new_query -> have_posts() ) :
      // run the loop
      while( $new_query -> have_posts() ): 
          $new_query -> the_post();
      
          $post_meta = get_post_meta( get_the_ID() );
          // $locked = $post_meta['_rcc_member_restrict_content'][0];

          // $video_podcast_array = Template\prepare_video_podcast_data(get_the_ID());
          // Template\video_podcast($video_podcast_array, $locked);
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
          <header class="entry-header">
            <div class="entry-meta">
              <?php echo get_the_category_list( ', ' ); ?>
            </div>

            <h2 class="entry-title">
              <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
            </h2>
          </header>
  
          <div class="entry-content">
            <?php the_excerpt(); ?>
          </div>
        </article>

<?php

      endwhile;
  endif;
  wp_reset_query();
  die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_videopodcast', 'rcc_video_podcast_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_videopodcast', 'rcc_video_podcast_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}