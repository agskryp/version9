<?php
  /**
   * The front page file.
   *
   * @link https://codex.wordpress.org/Template_Hierarchy
   * @package version9
   */

  require get_template_directory() . '/partials/doctype.php';
?>

<div id="page" class="homepage-screen">
  <a class="skip-link screen-reader-text">
    <?php esc_html_e( 'Skip to menu', 'version9' ); ?>
  </a>

  <div id="primary" class="content-area">
    <header>
      <?php require get_template_directory() . '/partials/site-branding.php'; ?>
    </header>

    <main id="main" class="site-main" role="main">
      <ul id="homepageMenu" class="homepage-container">
        <li class="homepage-menu-item">
          <a href="/blog">
            <p>
              Browse through articles and writings about anything front-end related
            </p>
            
            <button class="homepage-menu-button">
              Read Blog
            </button> 
          </a>
        </li>

        <li class="homepage-menu-item">
          <a href="/portfolio">
            <p>
              Check out various web projects and what was involved in the building process
            </p>
            
            <button class="homepage-menu-button">
              View Portfolio
            </button>
          </a>
        </li>

        <li class="homepage-menu-item">
          <a href="/about">
            <p>
              Learn more about the man behind the page in front of the computer beyond the internet.
            </p>
            
            <div class="homepage-menu-button">
              About Me
            </div>
          </a>
        </li>
      </ul>
    </main>      <!-- #main -->
  </div>    <!-- #primary -->
</div>  <!-- #page -->

<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>
