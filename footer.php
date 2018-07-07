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
  <div class="site-info text-center">
    <?php require get_template_directory() . '/partials/social-links.php'; ?>
    
    <p style="margin: 0;">
      &copy; 2018 Andrew Skrypnyk
    </p>
    
    <?php printf( esc_html__( 'Designed by %s', 'version9' ), '<a href="http://agskryp.com">A.G. Skryp</a>' ); ?>
  </div>
</footer>

</div> <?php // bootstrap .row // ?>
</div> <?php // #page // ?>

<?php wp_footer(); ?>

</body>
</html>
