<?php
  /**
   * Template part for displaying page portfolio content
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */

    $primary_category   = get_the_category()[0] -> name;
    $secondary_category = get_the_category()[1] -> name;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
	  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
  
  <div class="entry-content"> 
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
    
    <footer class="entry-footer">
      <?php version9_post_footer_meta(); ?>
    </footer>
  </div>
</article>

<nav class="navigation post-navigation" role="navigation">
  <h2 class="screen-reader-text">Site navigation</h2>
  
  <div class="nav-links">
    <div class="nav-previous">
      <a href="<?php echo AG_PORTFOLIO; ?>">Back to Portfolio</a>
    </div>
  </div>
</nav>
