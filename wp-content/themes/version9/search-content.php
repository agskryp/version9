<?php
  /**
   * The template for displaying search with results
   */

  // $posts_per_page = -1;
  // $blog_posts = new WP_Query( array(
  //   'post_status'    => 'publish',
  //   'post_type'      => 'post',
  //   'posts_per_page' => $posts_per_page,
  // ) );
  // $max_number_of_pages = $blog_posts -> max_num_pages - 1;

  get_header();
?>

<div>
  <main class="index-page-container">
    <header class="page-header">
      <h1 class="page-title ">
        <?php
          global $wp_query;

          $number_of_results = $wp_query -> found_posts;
            
          if( $number_of_results == 1 ) {
            echo 'There is ' . $number_of_results . ' result for <span class="search-result">' . get_search_query() . '</span>';
          }

          else {
            echo 'There\'s ' . $number_of_results . ' results for <span class="search-result">' . get_search_query() . '</span>';
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

    <div id="loadMore" class="load-more-container text-center">
      <a href="#" class="load-more-blog-posts"
        posts-per-page='<?= $posts_per_page ?>'
        current-page='1'
        action="loadblogposts"
        max-pages='<?= $max_number_of_pages ?>'>Load more &darr;</a>
    </div>   
  </main>
  
  <?php get_footer(); ?>
</div>
