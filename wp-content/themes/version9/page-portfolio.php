<?php
  /**
   * Template Name: Portfolio Template 
   */

  query_posts( array(
    'post_type'      => 'portfolio',
    'posts_per_page' => -1
  ) );

  get_header(); 
?>

<div>
  <main class="portfolio-page-container">
    <header class="page-header">
      <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>  

    <div class="text-center">
      <?php
        while( have_posts() ) {
          the_post();

          echo '<a class="portfolio-item-container" href="' . get_permalink() . '">'; 
            the_post_thumbnail( 'small' ); 

            echo '<h2>' . get_the_title() . '</h2>';
          echo '</a>';
        }
      ?>  
    </div>
  </main>

  <?php get_footer(); ?>
</div>
