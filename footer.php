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
    <?php 
      printf( esc_html__( '%s', 'version9' ), 
        '<a target="_blank" title="Github" href="https://github.com/agskryp/">
          <p class="sr-only">
            Github
          </p>

          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
          </svg>
        </a>'
      );
    
      printf( esc_html__( '%s', 'version9' ), 
        '<a target="_blank" title="Codepen" href="https://codepen.io/agskryp/">
          <p class="sr-only">
            Codepen
          </p>
          
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/>
          </svg>
        </a>'
      );
    ?>
    
    
    <br>
    
    <span>
      &copy; 2014 - 2018 Andrew Skrypnyk.  All rights reserved.
    </span>
    
    <br>
    
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'version9' ) ); ?>">
      <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Powered by %s', 'version9' ), 'WordPress' );
      ?>
    </a>
    
    <span class="sep">
      |
    </span>
    
    <?php
      printf( esc_html__( 'Designed by %s.', 'version9' ), '<a href="http://agskryp.com">agskryp</a>' );
    ?>
  </div>
</footer>

</div> <?php // bootstrap .row // ?>
</div> <?php // #page // ?>

<?php wp_footer(); ?>

</body>
</html>
