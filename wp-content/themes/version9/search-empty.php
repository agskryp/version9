<?php
  /**
   * The template for displaying no search results
   */

  get_header();
?>

<div style="height: 100vh; display: flex;  flex-direction: column;">
  <main class="index-page-container" style="flex-grow: 2;">
    <header class="page-header">
      <h1 class="page-title">Nothing Found</h1>
    </header>

    <div class="page-content">
      <p>Sorry, there is nothing related to your search term.</p>

      <p>Use the navigation menu to start at something more general,</p>

      <p>Or, use the search form below and try your luck again.</p>

      <div class="main-search-form">
        <?php require get_template_directory() . '/searchform.php';  ?>
      </div>
    </div>
  </main>
  
  <?php get_footer(); ?>
</div>
