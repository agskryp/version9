<?php
  /**
   * The template for displaying the footer
   */

   $current_year = date( 'Y' );
?>

</div> <?php // #content // ?>

<footer class="footer-container">
  <div class="footer-info">
    <div class="privacy-container">
      <a href="<?php echo esc_url( AG_PRIVACY ); ?>">Privacy Policy</a>
    </div>
  
    <div class="copyright text-center">
      <?php 
        require get_template_directory() . '/partials/social-links.php';
        
        echo '<p>&copy; 2014 - ' . $current_year . '  Andrew Skrypnyk</p>';
      ?>
    </div>
    
    <p class="designed-by">
      Designed by 
      
      <a href="<?php echo home_url(); ?>">A.G. Skryp</a>
    </p>
  </div>
</footer>

</div> <?php // bootstrap .row // ?>
</div> <?php // #page // ?>
</div> <?php // .background-image // ?>

<?php wp_footer(); ?>

</body>
</html>
