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

          /**
           * Use an ajax button to load more
           */
          $navigation = '';
        
          // Don't print empty markup if there's only one page.
          if ( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {
            $args = wp_parse_args( $args, array(
              'prev_text'          => esc_html__( 'View older posts', 'moltodestroyed' ),
              'next_text'          => esc_html__( 'View newer posts', 'moltodestroyed' ),
              'screen_reader_text' => esc_html__( 'Posts navigation', 'moltodestroyed' ),
            ) );
        
            $next_link = get_previous_posts_link( $args[ 'next_text' ] );
            $prev_link = get_next_posts_link( $args[ 'prev_text' ] );
        
            if ( $prev_link ) {
              $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
            }
        
            if ( $next_link ) {
              $navigation .= '<div class="nav-next">' . $next_link . '</div>';
            }
        
            $navigation = _navigation_markup( $navigation, 'posts-navigation', $args[ 'screen_reader_text' ] );
          }
        
          echo $navigation;
      }
     
      function get_most_recent_posts( $type = 'post', $categories = '', $limit = 3, $exclude = [] ) {

        $args = [
            'post_status'         => 'publish',
            'post_type'           => $type,
            'posts_per_page'      => $limit,
            'orderby'             => 'date',
            'order'               => 'DESC',
            'ignore_sticky_posts' => 1,
        ];

        // filter by category
        if ( ! empty( $categories ) ) {
            $args['cat'] = $categories;
        }

        // exclude posts
        if( ! empty( $exclude ) ) {
            $args['post__not_in'] = $exclude;
        }

        $posts = new \WP_Query( $args );

        return $posts;
    }

      $category = "";

      $posts_per_page = 2;
      $video_podcast_posts = get_most_recent_posts( 'post', $category, $posts_per_page );

      $max_number_of_pages = $video_podcast_posts -> max_num_pages - 1;
      $excluded_ids = [];
    
      $video_podcast_cat   = $video_podcast_posts -> query_vars[ 'category_name' ];
        ?>
            <div class="load-more-button">
              <a href="#" class="rcc-video-podcast-loadmore" 
                excluded-ids='<?= implode(",",$excluded_ids); ?>' 
                posts-per-page='<?= $posts_per_page ?>'
                current-page='0'
                action="videopodcast"
                category="<?= $video_podcast_cat ?>"
                max-pages='<?= $max_number_of_pages ?>'><?php _e( 'Load more video and podcasts', 'RCC' ); ?></a>
              </div>    
          <br />  
          <br />  
          <br />  
          <br />  
          <br />  
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
