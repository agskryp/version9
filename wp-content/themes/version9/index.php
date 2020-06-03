<?php
  /**
   * The template for the blog page
   */

  get_header();
?>

<div>
  <main class="index-page-container">
    <header class="page-header">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
    
    <?php    
      if( have_posts() ) {
        while( have_posts() ) {
          the_post();
      ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
          <header class="entry-header">
            <div class="entry-meta">
              <?php echo get_the_category_list( ', ' ); ?>
            </div>

            <h2 class="entry-title">
              <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
            </h2>
          </header>
  
          <div class="entry-content">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php
        }

        version9_posts_navigation();
      }
    ?>   
    
    <div class="ad-container">
      <ins class="adsbygoogle" style="display:block"
           data-ad-client="ca-pub-5942635838820429" data-ad-slot="8057614268"
           data-ad-format="auto" data-full-width-responsive="true">
      </ins>
      
      <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
  </main>
  
  <?php get_footer(); ?>
</div>
