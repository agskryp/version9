<?php
  /**
   * The template for portfolio posts
   */

  $primary_category   = get_the_category()[0] -> name;
  $secondary_category = get_the_category()[1] -> name;

  get_header();
?>

<div>
  <main>
    <?php
	    while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="page-header">
          <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header>
  
        <div class="page-content"> 
          <?php
            the_content();
    
            echo '<p class="text-center screen-shot">';
              echo 'All screen shots were captured on ' . get_field( 'screenshot_date' );
            echo '</p>';
    
            if( !empty( get_field( 'website' ) ) ) {
              if( $primary_category == 'Application' || $secondary_category == 'Application' ) {
                echo '<a class="text-center font-weight-bold site-link" style="display: block;"';
                echo 'href="http://' . get_field( 'website' ) . '" target="_blank"';
                echo 'rel="noopener">Click here to view ' . get_the_title() . '</a>';
              } 
              
              else {
                echo '<a class="text-center font-weight-bold site-link" style="display: block;"';
                echo 'href="http://' . get_field( 'website' ) . '" target="_blank"';
                echo 'rel="noopener">Click here to visit ' . get_the_title() . '</a>';
              }
            }
          ?>
        </div>
      </article>

      <nav class="navigation post-navigation" role="navigation">
        <div class="nav-links">
          <div class="nav-previous">
            <a href="<?php echo AG_PORTFOLIO; ?>">&larr; Back to Portfolio</a>
          </div>
        </div>
      </nav>
    <?php } ?>
  </main>
  
  <?php get_footer(); ?>
</div>
