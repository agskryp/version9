<?php
  /* Template Name: Portfolio */

  get_header(); 

  query_posts( array(
    'post_type'      => 'portfolio',
    'posts_per_page' => -1
  ) );
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main portfolio-page content-page">
    <header class="page-header text-center">
      <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>  
    
    <div class="text-center">
      <?php
        while ( have_posts() ) :
          the_post();
      ?>      
        <a href="<?php echo get_permalink(); ?>">
          <div class="entry-content">
            <p class="entry-title text-center">
              <?php the_title(); ?>
            </p>

            <?php the_post_thumbnail(); ?>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
