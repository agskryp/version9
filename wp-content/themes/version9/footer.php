<?php
  /**
   * The template for displaying the footer
   */

   $current_year = date( 'Y' );
?>

</div> <?php // #content // ?>

<footer class="footer-container">
  <div class="footer-content">
    <div class="privacy-container">
      <a href="<?php echo esc_url( AG_PRIVACY ); ?>">Privacy Policy</a>
    </div>
  
    <div class="copyright-container">
      <?php 
        require get_template_directory() . '/partials/social-links.php';
        
        echo '<span>&copy; 2014 - ' . $current_year . ' &nbsp; Andrew Skrypnyk</span>';
      ?>
    </div>
    
    <div class="credit-container"> 
      <span>Site by  <a href="<?php echo home_url(); ?>">A.G. Skryp</a></span>
    </div>
  </div>
</footer>

</div> <?php // bootstrap .row // ?>
</div> <?php // #page // ?>
</div> <?php // .background-image // ?>

<?php wp_footer(); ?>

</body>
</html>
