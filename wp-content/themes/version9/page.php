<?php
  /**
   * This template is for default pages
   */

  get_header();
?>

<div>
  <main class="default-page-container">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="page-header">
          <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header>

        <div class="content-container">
          <?php the_content(); ?>
        </div>
      </article>
    <?php } ?>
  </main>
  
  <?php get_footer(); ?>
</div>
