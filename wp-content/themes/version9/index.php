<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package version9
 */

  get_header();
?>

<div id="primary">
  <main id="main" class="site-main index-page excerpt-page">
    <?php
      if ( have_posts() ) :
        if ( is_home() && !is_front_page() ) :
      ?>
        <header class="page-header text-center">
          <h1 class="page-title">
            <?php single_post_title(); ?>
          </h1>
        </header>
    
      <?php
        endif;

      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );
      endwhile;

      version9_posts_navigation();

      else :
        get_template_part( 'template-parts/content', 'none' );
      
      endif;
    ?>   
    
        <div class="ad-container">
      <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-5942635838820429"
         data-ad-slot="8057614268"
         data-ad-format="auto"
         data-full-width-responsive="true">
      </ins>
      
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </main>
  
  <?php
    get_sidebar();
  
    get_footer();
  ?>
</div>
