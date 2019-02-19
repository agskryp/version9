<?php
  /**
   * The template for displaying search results pages
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
   * @package version9
   */

  get_header();
?>

<div id="primary">
  <main id="main" class="site-main search-page excerpt-page">
    <?php if ( have_posts() ) : ?>
      <header class="page-header">
        <h1 class="page-title text-center">
          <?php
            global $wp_query;
            $number_of_results = $wp_query -> found_posts;
            
            /* translators: %s: search query. */
            if ( $number_of_results == 1 ) {
              printf( esc_html__( 'There is ' . $number_of_results . ' result for %s', 'version9' ),
              '<span class="search-result">' . get_search_query() . '</span>' );
            }

            else {
              printf( esc_html__( 'There are ' . $number_of_results . ' results for %s', 'version9' ),
              '<span class="search-result">&#39;' . get_search_query() . '&#39;</span>' );
            }
          ?>
        </h1>
      </header>

      <?php
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content', 'search' );

        endwhile;

        the_posts_navigation();

      else :
        get_template_part( 'template-parts/content', 'none' );

      endif;
    ?>
  </main>
  
  <?php
    get_sidebar();
  
    get_footer();
  ?>
</div>
