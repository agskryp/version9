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
    <h1 class="page-title text-center"><?php esc_html_e( 'Nothing Found', 'version9' ); ?></h1>
  </header>

  <div class="page-content">
    <p>Sorry, I can't find anything related to your search term.</p>

    <p>Try using the site's navigation menu to start at something more general,</p>

    <p>Or, use the search form below and try your luck again.</p>

    <div id="site-search" class="main-search-form">
      <?php require get_template_directory() . '/searchform.php';  ?>
    </div>
  </div>
</section>
