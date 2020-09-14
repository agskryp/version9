<?php
  /**
   * The template for displaying no search results
   */

  get_header();
?>

<div class="main-content-column">
  <main>
    <header class="page-header">
      <h1 class="page-title">Nothing Found</h1>
    </header>

    <div class="content-container">
      <p>Sorry, there is nothing related to your search term.</p>

      <p>Use the navigation menu to start at something more general,</p>

      <p>Or, use the search form and try again.</p>

      <?php require get_template_directory() . '/partials/searchform.php';  ?>
    </div>
  </main>
  
  <?php get_footer(); ?>
</div>
