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
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
            <path d="M15 12h-10v1h10v-1zm-4 2h-6v1h6v-1zm4-6h-10v1h10v-1zm0 2h-10v1h10v-1zm0-6h-10v1h10v-1zm0 2h-10v1h10v-1zm7.44 10.277c.183-2.314-.433-2.54-3.288-5.322.171 1.223.528 3.397.911 5.001.089.382-.416.621-.586.215-.204-.495-.535-2.602-.82-4.72-.154-1.134-1.661-.995-1.657.177.005 1.822.003 3.341 0 6.041-.003 2.303 1.046 2.348 1.819 4.931.132.444.246.927.339 1.399l3.842-1.339c-1.339-2.621-.693-4.689-.56-6.383zm-6.428 1.723h-13.012v-16h14v7.894c.646-.342 1.348-.274 1.877.101l.123-.018v-8.477c0-.828-.672-1.5-1.5-1.5h-15c-.828 0-1.5.671-1.5 1.5v17c0 .829.672 1.5 1.5 1.5h13.974c-.245-.515-.425-1.124-.462-2z"/>
            
            <h3 class="sr-only">Blog</h3>
          </svg>

          <p>Browse through tutorials, blog posts, and writings about web development</p>

          <a href="<?php echo esc_url( AG_BLOG ); ?>">Read Blog</a>
        </li>
        
        <li class="homepage-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
            <path d="M9 2c-1.104 0-2 .896-2 2v2h2v-1.5c0-.276.224-.5.5-.5h5c.276 0 .5.224.5.5v1.5h2v-2c0-1.104-.896-2-2-2h-6zm12.561 12l-1.2 6h-16.721l-1.2-6h19.121zm2.439-2h-24l2 10h20l2-10zm-1-5v3h-2v-1h-18v1h-2v-3h22z"/>
            
            <h3 class="sr-only">Portfolio</h3>
          </svg>
            
          <p>Check out various web projects and my involvment in the building process</p>
            
          <a href="<?php echo esc_url( AG_PORTFOLIO ); ?>">View Works</a>
        </li>

        <li class="homepage-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
            <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/>
            
            <h3 class="sr-only">Biography</h3>
          </svg>

          <p>Learn about the man behind the page on a computer beyond the internet</p>

          <a href="<?php echo esc_url( AG_ABOUT ); ?>">About Me</a>
        </li>
      </ul>
    </main>
  </div> <?php // <!-- #primary --> ?>
</div> <?php // <!-- #page --> ?>

<?php wp_footer(); ?>

</body>

</html>
