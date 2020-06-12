<?php
  /**
   * The template for displaying the footer
   */

   $current_year = date( 'Y' );
?>

<footer class="footer-container">
  <div class="footer-content">
    <div class="privacy-container">
      <?php 
        wp_nav_menu( array(
          'theme_location' => 'footer-policy-menu',
          'depth'          => 1,
        ) );
      ?>
    </div>
  
    <div class="copyright-container">
      <?php 
        require get_template_directory() . '/partials/social-links.php';
        
        echo '&copy; 2014 - ' . $current_year . ' &nbsp; Andrew Skrypnyk';
      ?>
    </div>
    
    <div class="credit-container"> 
      Site by <a href="<?php echo home_url(); ?>">A.G. Skryp</a>
    </div>
  </div>
</footer>

<!-- </div> -->
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
