<?php
  /**
   * Template part for displaying posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div style="   
            ">
	<header class="entry-header">
      <?php
		if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
      
		else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		
        endif;

		if ( 'post' === get_post_type() ) :
      ?>
	
      <div class="entry-meta">
        <?php version9_post_header_meta(); ?>
      </div>
      
      <?php endif; ?>
	</header>
    
    <div class="text-center">
      <?php version9_post_thumbnail(); ?>
    </div>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'version9' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'version9' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<footer class="entry-footer">
		<?php version9_post_footer_meta(); ?>
	</footer>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
