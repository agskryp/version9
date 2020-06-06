<?php
/**
 * The template for displaying all single posts
 */

  get_header();

  $posted_date = get_the_time('F j, Y');
?>

<div>
  <main class="portfolio-post-container">
    <?php
	    while( have_posts() ) {
        the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="page-header">
          <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

          <div class="entry-meta">
            <?php echo 'Posted <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $posted_date . '</a> in <span class="cat-links">' . get_the_category_list( esc_html__( ', ', 'version9' ) ) . '</span>'; ?>
    
            <?php // version9_post_header_meta(); ?>
          </div>
        </header>

        <div class="page-content"> 
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
        
        
        if( comments_open() || get_comments_number() ) {
          comments_template();

          version9_blog_navigation();
        }
      }
	?>
  </main>
  
  <?php get_footer(); ?>
</div>
