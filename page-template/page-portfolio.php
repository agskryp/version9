<?php
  /* Template Name: Portfolio */

  get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main page-page">
    <?php
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'portfolio' );
      endwhile; // End of the loop.
    ?>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
