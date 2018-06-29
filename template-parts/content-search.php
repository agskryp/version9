<?php
  /**
   * Template part for displaying results in search pages
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
    
      if ( 'post' === get_post_type() ) :
    ?>
    
      <div class="entry-meta">
        <?php version9_post_header_meta(); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="text-center featured-image-container">
      <?php version9_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <footer class="entry-footer">
    <?php version9_post_footer_meta(); ?>
  </footer>
</article>
