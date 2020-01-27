<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package version9
 */

  get_header();
?>

<div id="primary">
  <main id="main" class="site-main single-page content-page">
    <?php
	  while( have_posts() ) {
        the_post();
    
        if( get_post_type() === 'portfolio' ) get_template_part( 'template-parts/content', 'portfolio' );
        else get_template_part( 'template-parts/content', get_post_type() );
        
        if( get_post_type() !== 'portfolio' ) {
    ?>
      <div class="ad-container">
        <ins class="adsbygoogle" style="display:block"
             data-ad-client="ca-pub-5942635838820429" data-ad-slot="8057614268"
             data-ad-format="auto" data-full-width-responsive="true">
        </ins>

        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
      </div>
    <?php
        }
        
        if( comments_open() || get_comments_number() ) {
          comments_template();

          version9_blog_navigation();
        }
      }
	?>
  </main>
  
  <?php
    get_sidebar();
    get_footer();
  ?>
</div>
