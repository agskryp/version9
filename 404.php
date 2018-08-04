<?php
  /**
   * The template for displaying 404 pages (not found)
   *
   * @link https://codex.wordpress.org/Creating_an_Error_404_Page
   * @package version9
   */

  get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="page-404 excerpt-page">
    <section class="error-404 not-found">
      <header class="page-header text-center">
        <h1 class="page-title">
          <?php esc_html_e( 'Uh oh, this page can&rsquo;t be found!', 'version9' ); ?>
        </h1>
      </header>
      
      <div class="page-content">
        <p>
          Sorry about that.  If you think this page should exist, <a href="<?php echo esc_url( __( AG_BLOG, 'version9' ) ); ?>">let me know</a>!
        </p>
        
        <p>
          In the mean time, use the navigation menu to land on a more general page.
        </p>
        
        <p>
          Or, use the search form below for something more specific.
        </p>

        <div id="site-search" class="main-search-form">
          <?php require get_template_directory() . '/searchform.php';  ?>
        </div>
      </div>
    </section>
  </main>
    
  <?php get_footer(); ?>
</div>
