<?php
  /**
   * The template for displaying 404 pages (not found)
   */

  get_header();
?>

<div class="main-content-column">
  <main class="version9-page-container">
    <header class="page-header">
      <h1 class="page-title">This page can't be found!</h1>
    </header>
    
    <div class="full-content">
      <p>Not all roads lead to Rome, this one lead to a 404 page.</p>
      
      <p>Use the navigation menu to go to a more general page.</p>
      
      <p>Or, type in the search form below for something more specific.</p>

      <?php require get_template_directory() . '/searchform.php';  ?>
    </div>
  </main>
    
  <?php get_footer(); ?>
</div>
