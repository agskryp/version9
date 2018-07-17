<?php
  /**
   * The template for displaying the footer
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package version9
   */
?>

</div> <?php // #content // ?>

<footer id="colophon" class="site-footer">
  <div class="footer-info">
    <a class="privacy-policy" href="<?php echo esc_url( __( AG_PRIVACY, 'version9' ) ); ?>">
      Privacy Policy
    </a>    
  
    <div class="copyright text-center">
      <?php require get_template_directory() . '/partials/social-links.php'; ?>

      <p>
        &copy; 2014 - 2018 Andrew Skrypnyk
      </p>
    </div>
    
    <p class="designed-by">
      Designed by <a href="/">A.G. Skryp</a>
    </p>
  </div>
</footer>

</div> <?php // bootstrap .row // ?>
</div> <?php // #page // ?>

<?php wp_footer(); ?>

</body>
</html>
