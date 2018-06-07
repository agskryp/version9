<?php
  /**
   * The header for our theme
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   * @package version9
   */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site container-fluid">
    <div class="row">
      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'version9' ); ?>
      </a>

      <header id="masthead" class="site-header col-12 col-lg-3">
        <div class="site-branding">
          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <span>Andrew</span>
              <span>Skrypnyk</span>
            </a>
          </p>

          <div class="site-description">
            <p class="text-right">
              <span>Web</span>
              <span>&amp; &nbsp;</span>
            </p>

            <p class="text-left" style="margin-left: 6px;">
              <span>Design</span>
              <span>Development</span>
            </p>
          </div>
        </div>

        <nav id="site-navigation" class="site-navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Menu', 'version9' ); ?>
          </button>

          <button class="menu-toggle" aria-controls="search-form" aria-expanded="false">
            <?php esc_html_e( 'Search', 'version9' ); ?>
          </button>

          <div id="main-navigation" class="main-navigation">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
          </div>

          <div id="site-search" class="main-search-form">
            <?php get_search_form( ); ?>
          </div>
        </nav>
      </header>

      <div id="content" class="site-content col-12 col-lg-9 offset-lg-3">
