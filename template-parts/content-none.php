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
    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'version9' ); ?></h1>
  </header>

  <div class="page-content">
    <?php
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
        Sorry, but nothing matched your search terms. Please try again with some different keywords.        
      </p>
        
    <div id="site-search" class="main-search-form">
            <?php require get_template_directory() . '/searchform.php';  ?>
          </div>
<?php
      else :
    ?>

      <p>
        It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.
      </p>
    
    <div id="site-search" class="main-search-form">
            <?php require get_template_directory() . '/searchform.php';  ?>
          </div>
<?php
      endif;
    ?>
  </div>
</section>
