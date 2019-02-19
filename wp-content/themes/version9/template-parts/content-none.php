<?php
  /**
   * Template part for displaying a message that posts cannot be found
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>

<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title text-center">
      <?php esc_html_e( 'Nothing Found', 'version9' ); ?>
    </h1>
  </header>

  <div class="page-content">
    <?php
      /* Dunno how to view this content, need to check template */
      if ( is_home() && current_user_can( 'publish_posts' ) ) :
        printf( '<p>' . wp_kses(
          /* translators: 1: link to WP admin new post page. */
          __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'version9' ),
          array(
            'a' => array(
              'href' => array(),
          ), )
        ) . '</p>', esc_url( admin_url( 'post-new.php' ) ) );

      elseif ( is_search() ) :
    ?>
      
      <p>
        Sorry, I can't find anything related to your search term.
      </p>
    
      <p>
        Try using the site's navigation menu to start at something more general,
      </p>
    
      <p>
        Or, use the search form below and try your luck again.
      </p>
        
      <div id="site-search" class="main-search-form">
        <?php require get_template_directory() . '/searchform.php';  ?>
      </div>

    <?php
      /* Dunno how to view this content, need to check template */
      else :
    ?>
      <p>
        It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.
      </p>

      <div id="site-search" class="main-search-form">
        <?php require get_template_directory() . '/searchform.php';  ?>
      </div>
    
    <?php endif; ?>
  </div>
</section>
