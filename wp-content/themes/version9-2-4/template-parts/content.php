<?php
  /**
   * Template part for displaying posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      if( is_singular() ) the_title( '<h1 class="entry-title">', '</h1>' );
      else the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

      if( 'post' === get_post_type() ) {
    ?>
      <div class="entry-meta">
        <?php version9_post_header_meta(); ?>
      </div>
    <?php } ?>
  </header>
  
  <?php if( has_post_thumbnail() ) : ?>
    <div class="text-center featured-image-container">
      <?php version9_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <div class="entry-content">
    <?php
      if( is_singular() ) :
        the_content( sprintf( wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'version9' ),
          array(
            'span' => array(
              'class' => array(),
          ), )
        ), get_the_title() ) );

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'version9' ),
          'after'  => '</div>',
        ) );
    
      else :
        the_excerpt();
    
      endif;
    ?>

    <footer class="entry-footer">
      <?php version9_post_footer_meta(); ?>
    </footer>
  </div>
</article>

<?php if( is_page_template( 'index.php' ) ) { ?>
  <div class="ad-container">
    <ins class="adsbygoogle" style="display:block"
         data-ad-client="ca-pub-5942635838820429" data-ad-slot="8057614268"
         data-ad-format="auto" data-full-width-responsive="true">
    </ins>

    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  </div>
<?php } ?>
