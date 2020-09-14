<?php
  /**
   * The template for displaying search with results
   */

  global $wp_query;

  $search_value        = $wp_query -> query[ 's' ];
  $number_of_results   = $wp_query -> found_posts;
  $max_number_of_pages = $wp_query -> max_num_pages - 1;
  $posts_per_page      = AG_posts_per_page;

  get_header();
?>

<div class="main-content-column">
  <main class="version9-page-container">
    <header class="page-header">
      <h1 class="page-title">
        <?php            
          if( $number_of_results == 1 ) {
            echo 'There is ' . $number_of_results . ' result for <strong>' . get_search_query() . '</strong>';
          }

          else {
            echo 'There\'s ' . $number_of_results . ' results for <strong>' . get_search_query() . '</strong>';
          }
        ?>
      </h1>
    </header>

    <div class="excerpt-list-container">
      <?php
        while( have_posts() ) {
          the_post();

          include( 'partials/excerpt-container.php' ); 
        }
      ?>
    </div>

    <?php if( $number_of_results > $posts_per_page ) { ?>
      <div id="loadMoreButtonContainer" class="load-more-container text-center">
        <a href="#" class="load-more-blog-posts"
          posts-per-page='<?= $posts_per_page ?>'
          current-page='1'
          action="loadblogposts"
          search="<?= $search_value ?>"
          max-pages='<?= $max_number_of_pages ?>'>Load more &darr;</a>
      </div>
    <?php } ?>
  </main>
  
  <?php get_footer(); ?>
</div>
