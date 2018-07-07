<?php
  /**
   * The header for our theme
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package version9
   */

  require get_template_directory() . '/partials/doctype.php';
?>

  <div id="page" class="site container-fluid">
    <div class="row">
      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'version9' ); ?>
      </a>

      <header id="masthead" class="site-header col-12 col-md-4 col-lg-3">
        <?php require get_template_directory() . '/partials/site-branding.php'; ?>
        
        

        <nav id="site-navigation" class="site-navigation">
          <div class="main-nav-button">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <span>
                <?php esc_html_e( 'Menu', 'version9' ); ?>
              </span>

              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
              </svg>
            </button>

            <button class="menu-toggle" aria-controls="search-form" aria-expanded="false">
              <span>
                <?php esc_html_e( 'Search', 'version9' ); ?>
              </span>

              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z"/>
              </svg>
            </button>
          </div>
          
           <div class="social-links">
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
          </div>
          

          <div id="main-navigation" class="main-navigation">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
          </div>

          <div id="site-search" class="main-search-form">
            <?php require get_template_directory() . '/searchform.php';  ?>
          </div>
        </nav>
        
       
      </header>

      <div id="content" class="site-content col-12 col-md-8 offset-md-4 col-lg-9 offset-lg-3">
