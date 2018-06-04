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

      <header id="masthead" class="site-header col-12 col-lg-3" style="margin-top: 26px; padding: 0;">
        <div class="site-branding">
          <p class="site-title" style="margin-bottom: 26px;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              Andrew 
              <span>Skrypnyk</span>
            </a>
          </p>

          <div class="site-description" style="display: flex; justify-content: center; margin-bottom: 26px;">
            <p class="left-text" style="text-align: right; margin-bottom: 0;">
              Web <br>
              &amp; &nbsp;
            </p>
            
            <p class="left-right" style="text-align: left; margin-bottom: 0;">
              Design <br>
              Development
            </p>
          </div>
		</div>

		<nav id="site-navigation" class="main-navigation">
          <button class="menu-toggle">
            <?php esc_html_e( 'Search', 'version9' ); ?>
          </button>
          
          
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Hamburger Menu', 'version9' ); ?>
          </button>
		
          <?php
			wp_nav_menu( array(
		      'theme_location' => 'menu-1',
		      'menu_id'        => 'primary-menu',
			) );
		  ?>
		</nav> 
      </header> <?php // #masthead // ?>

      <div id="content" class="site-content col-12 col-lg-9 offset-lg-3">
