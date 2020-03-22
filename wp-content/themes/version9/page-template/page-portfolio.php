<?php
  /* Template Name: Portfolio */

  get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main portfolio-page content-page">
    <header class="page-header text-center">
      <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>  

    <div class="text-center">
      <a href="#portfolioWebsites">Websites</a> | <a href="#portfolioApplications">Applications</a>
      
      <h2 id="portfolioWebsites" style="font-weight: 100;     line-height: 1;
    margin-bottom: 28px;">Websites</h2>

      <?php
        query_posts( array(
          'post_type'      => 'portfolio',
          'posts_per_page' => -1,
          'category_name'  => 'website'
        ) );

        while ( have_posts() ) {
          the_post();
      ?>      
        <a href="<?php echo get_permalink(); ?>">
          <div class="entry-content">
            <?php the_post_thumbnail( 'medium' ); ?>

            <p class="entry-title text-center" style="margin: 10px 0 0;"><?php the_title(); ?></p>
          </div>
        </a>
      <?php 
        }
      
        wp_reset_query();

        query_posts( array(
          'post_type'      => 'portfolio',
          'posts_per_page' => -1,
          'category_name'  => 'application'
        ) );
        
        if( have_posts() ) {
      ?>

      <hr />
  
    <h2 id="portfolioApplications" style="font-weight: 100;">Applications</h2>
      <?php
        query_posts( array(
          'post_type'      => 'portfolio',
          'posts_per_page' => -1,
          'category_name'  => 'application'
        ) );
        
        while ( have_posts() ) :
          the_post();
      ?>      
        <a href="<?php echo get_permalink(); ?>">
          <div class="entry-content">
            <?php the_post_thumbnail( 'medium' ); ?>

            <p class="entry-title text-center" style="margin: 10px 0 0;"><?php the_title(); ?></p>
          </div>
        </a>
      <?php endwhile; } ?>
    </div>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
