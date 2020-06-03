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
    
    <div class="test-article-container">
    <?php    
      if( have_posts() ) {
        while( have_posts() ) {
          the_post();
          
          include( 'partials/excerpt-container.php' );
        }
      }
     
    


      $posts_per_page = 2;
      $video_podcast_posts = get_most_recent_posts( 'post', $posts_per_page );

      $max_number_of_pages = $video_podcast_posts -> max_num_pages - 1;
    
        ?>
        </div>

            <div class="load-more-container text-center" style="margin-bottom: 28px;">
              <a href="#" class="rcc-video-podcast-loadmore" 
                posts-per-page='<?= $posts_per_page ?>'
                current-page='0'
                action="videopodcast"
                max-pages='<?= $max_number_of_pages ?>'>Load more &#x25BC;</a>
              </div> 
        <?php // }    
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
