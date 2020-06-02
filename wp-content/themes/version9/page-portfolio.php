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

    <div class="portfolio-post-list">
      <?php
        while( have_posts() ) {
          the_post();
      ?>            
        <a class="entry-content" href="<?php echo get_permalink(); ?>">
          <?php the_post_thumbnail( 'medium' ); ?>

          <h2 class="entry-title"><?php the_title(); ?></h2>
        </a>
      <?php } ?>  
    </div>
  </main>

  <?php get_footer(); ?>
</div>
