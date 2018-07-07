<?php
  /**
   * Template part for displaying page portfolio content
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
  
  <div class="entry-content">    
    <?php the_content(); ?>
    
    <p class="text-center screen-shot">
      All screen shots were captured on <?php echo get_field( 'screenshot_date' ); ?>
    </p>
    
    <?php if ( ! empty( get_field( 'website' ) ) ) { ?>
      <p class="text-center font-weight-bold">
        <a href="http://<?php echo get_field( 'website' ); ?>" target="_blank">
          Click here to visit <?php echo the_title(); ?>
        </a>
      </p>
    <?php } ?>
    
    <footer class="entry-footer">
      <?php version9_post_footer_meta(); ?>
    </footer>
  </div>
</article>

<nav class="navigation post-navigation" role="navigation">
  <h2 class="screen-reader-text">
    Page navigation
  </h2>
  
  <div class="nav-links">
    <div class="nav-previous">
      <a href="<?php echo AG_PORTFOLIO; ?>">
        Back to Portfolio
      </a>
    </div>
  </div>
</nav>
