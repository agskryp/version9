<?php
  /**
   * Template Name: Portfolio Template 
   */

  query_posts( array(
    'post_type'      => 'portfolio',
    'posts_per_page' => 6
  ) );

  get_header(); 
?>

<div>
  <main class="portfolio-page-container">
    <header class="page-header">
      <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>  

    <?php
      while( have_posts() ) {
        the_post();
    ?>      
      
      <a href="<?php echo get_permalink(); ?>">
        <div class="entry-content">
          <?php the_post_thumbnail( 'medium' ); ?>

          <h2 class="entry-title" style="margin: 10px 0 0;"><?php the_title(); ?></h2>
        </div>
      </a>
    <?php } ?>  
  </main>

  <?php get_footer(); ?>
</div>
