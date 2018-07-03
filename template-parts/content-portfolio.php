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
   
  <div class="text-center featured-image-container">
    <?php version9_post_thumbnail(); ?>
  </div>
  
  <div class="entry-content">
    <?php
      the_content();

//      wp_link_pages( array(
//        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'version9' ),
//        'after'  => '</div>',
//      ) );
    ?>

    <footer class="entry-footer">
      <?php version9_post_footer_meta(); ?>
    </footer>
  </div>
</article>
