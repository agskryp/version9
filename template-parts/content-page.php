<?php
  /**
   * Template part for displaying page content in page.php
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="text-center featured-image-container">
      <?php version9_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'version9' ),
		'after'  => '</div>',
      ) );
	
      if ( get_edit_post_link() ) :
    ?>
      <footer class="entry-footer">
		<?php
		  edit_post_link( sprintf( wp_kses(
		    /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Edit <span class="screen-reader-text">%s</span>', 'version9' ),
            array(
              'span' => array(
                'class' => array(),
            ), )
		  ), get_the_title() ),	'<span class="edit-link">',	'</span>' );
		?>
      </footer>
	<?php endif; ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
