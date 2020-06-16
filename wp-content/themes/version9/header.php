<?php
  /**
   * The theme header
   */

  require get_template_directory() . '/partials/doctype.php';
?>
<div class="container-fluid">
  <div class="row">
    <a class="screen-reader-text" href="#content">Skip to content</a>

    <header class="site-header col-12 col-md-4 col-lg-3">
      <a class="site-title" href="<?php echo home_url(); ?>">
        <span>Andrew</span>
        <span>Skrypnyk</span>
      </a>
    
      <div class="site-description text-center">
        <span>Web Design</span>
        <span>&amp; Development</span>
      </div>  
      



      <nav id="site-navigation" class="site-navigation">
        <div class="main-nav-button">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span>Menu</span>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
            </svg>
          </button>

          <button class="menu-toggle" aria-controls="search-form" aria-expanded="false">
            <span>Search</span>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z"/>
            </svg>
          </button>
        </div>
                  


        
        <?php require get_template_directory() . '/partials/social-links.php'; ?>
                  
        <!-- <div id="main-navigation" class="main-navigation"> -->
        <div class="main-navigation">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'header-main-menu',
              // 'menu_class'     => 'main-navigation',
              'depth'          => 1,
            ) );
          ?>
        </div>




        <?php require get_template_directory() . '/searchform.php'; ?>
      </nav>
    </header>

    <div id="content" class="main-content-container col-12 col-md-8 offset-md-4 col-lg-9 offset-lg-3">
