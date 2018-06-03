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
		  <?php
			the_custom_logo();
			
            if ( is_front_page() && is_home() ) :
		  ?>
            <h1 class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            </h1>

            <?php	else : ?>

            <p class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            </p>

            <?php
              endif;
              $version9_description = get_bloginfo( 'description', 'display' );

              if ( $version9_description || is_customize_preview() ) :
            ?>

            <p class="site-description">
              <?php echo $version9_description; /* WPCS: xss ok. */ ?>
            </p>
		  <?php endif; ?>
		</div> <?php // .site-branding // ?>

		<nav id="site-navigation" class="main-navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Primary Menu', 'version9' ); ?>
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
