<?php
  /**
   * The template for displaying archive pages
   */

  get_header();

  $posts_per_page = AG_posts_per_page;
  $category_name  = get_the_category()[0] -> category_nicename;
  $blog_posts     = new WP_Query( array(
    'post_status'    => 'publish',
    'post_type'      => 'post',
    'category_name'  => $category_name
  ) );
  
  $post_count = $blog_posts -> post_count;
  
  $blog_posts -> set( 'posts_per_page', $posts_per_page );
  $blog_posts -> query( $blog_posts -> query_vars );

  $max_number_of_pages = $blog_posts -> max_num_pages - 1;
?>

<div>
  <main class="version9-page-container">
    <?php if( have_posts() ) { ?>
      <header class="page-header">
        <h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>
      </header>

      <div class="excerpt-list-container">
        <?php    
          while( $blog_posts -> have_posts() ) {
            $blog_posts -> the_post();
            
            include( 'partials/excerpt-container.php' );
          }
        ?>
      </div>
    <?php } ?>
  </main>

  <?php if( $post_count > $posts_per_page ) { ?>
    <div id="loadMore" class="load-more-container text-center">
      <a href="#" class="load-more-blog-posts"
        posts-per-page='<?= $posts_per_page ?>'
        category-name='<?= $category_name ?>'
        current-page='1'
        action="loadblogposts"
        max-pages='<?= $max_number_of_pages ?>'>Load more &darr;</a>
    </div>    
  <?php } ?>

  <div class="ad-container">
    <ins class="adsbygoogle" style="display:block"
         data-ad-client="ca-pub-5942635838820429" data-ad-slot="8057614268"
         data-ad-format="auto" data-full-width-responsive="true">
    </ins>
    
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  </div>

  <?php get_footer(); ?>
</div>
