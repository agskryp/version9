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
    ?>

    <?php
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
