<?php
  /**
   * Template Name: Default Template 
   */

  get_header();
?>

<div>
  <main id="main" class="site-main page-page content-page">
    <?php
      while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>

        <div class="entry-content">
          <?php
            the_content();

            wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'version9' ),
          'after'  => '</div>',
            ) );
	
      if( get_edit_post_link() ) :
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
</article>

        <?php

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      }
    ?>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
