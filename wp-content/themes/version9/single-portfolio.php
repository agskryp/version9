<?php
  /**
   * The template for portfolio posts
   */

  $primary_category   = get_the_category()[0] -> name;
  $secondary_category = get_the_category()[1] -> name;

  $screenshot_date = get_post_meta( get_the_ID(), 'screenshot_date', true );
  $project_url     = get_post_meta( get_the_ID(), 'project_url', true );
  $project_type    = get_post_meta( get_the_ID(), 'project_type', true );

  get_header();
?>

<div>
  <main class="version9-post-container">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="page-header">
          <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header>

        <div class="page-content"> 
          <?php the_content(); ?>
    
          <div class="text-center">
            <p class="screen-shot">All screen shots were captured on <?php echo $screenshot_date; ?></p>

            <a target="_blank" rel="noopener" href="<?php echo $project_url; ?>">
              <strong>Click here to view <?php echo get_the_title(); ?></strong>
            </a>
          </div>
        </div>
      </article>

      <nav class="page-footer-navigation">
        <div class="nav-previous">
          <a href="<?php echo AG_PORTFOLIO; ?>">&larr; Back to Portfolio</a>
        </div>      
      </nav>
    <?php } ?>
  </main>

  <?php get_footer(); ?>
</div>
