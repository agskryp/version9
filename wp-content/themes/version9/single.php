<?php
/**
 * The template for displaying all single posts
 */

  get_header();

  $posted_date  = get_the_time( 'F jS, Y' );
  $updated_date = get_the_modified_time( 'F jS, Y' );
  
  $previous = get_previous_post_link(
    '<div class="nav-previous float-left"><small>View an older post</small>%link</div>', '&larr; %title'
  );

  $next = get_next_post_link(
    '<div class="nav-next float-right text-right"><small>View a newer post</small>%link</div>', '%title &rarr;'
  );
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

          <div class="meta-container">
            <?php
              echo 'Posted <a href="' . get_permalink() . '" rel="bookmark">' . $posted_date . '</a> in ' . get_the_category_list( esc_html__( ', ' ) );
            
              if( $updated_date != $posted_date ) echo '<div><em>Updated ' . $updated_date . '</em></div>';
            ?>
          </div>
        </header>

        <div class="full-content"> 
          <?php the_content(); ?>
        </div>
      </article>

      <div class="ad-container">
        <ins class="adsbygoogle" style="display:block"
             data-ad-client="ca-pub-5942635838820429" data-ad-slot="8057614268"
             data-ad-format="auto" data-full-width-responsive="true">
        </ins>

        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
      </div>

      <?php
        if( comments_open() || get_comments_number() ) comments_template();

        if( $previous || $next ) echo '<nav class="page-footer-navigation">' . $previous . $next . '</nav>';
      }
    ?>
  </main>
  
  <?php get_footer(); ?>
</div>
