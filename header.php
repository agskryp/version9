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
                    
          <?php require get_template_directory() . '/partials/social-links.php'; ?>
                    
          <div id="main-navigation" class="main-navigation">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
          </div>

          <div id="site-search" class="main-search-form">
            <?php require get_template_directory() . '/searchform.php'; ?>
          </div>
        </nav>
        
       
      </header>

      <div id="content" class="site-content col-12 col-md-8 offset-md-4 col-lg-9 offset-lg-3">
