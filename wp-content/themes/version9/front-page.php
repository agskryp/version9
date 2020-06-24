<?php
  /**
   * The front page file.
   */

  require get_template_directory() . '/partials/doctype.php';
?>

<div class="front-page-container">
  <header class="header-container">
    <h1 class="global-name-container name-container">
      <span id="givenName">Andrew</span>
      <span id="surName">Skrypnyk</span>
    </h1>

    <h2 id="occupationAnimation" class="colour-cycle occupation-container text-center font-weight-bold">
      <span>Web Design</span>
      <span>&amp; Development</span>
    </h2>
  </header>

  <main class="menu-container">
    <?php
      $items = get_post_meta( get_the_ID(), 'front_page_menu_group', true );

      foreach ( (array) $items as $key => $entry ) {
        $icon = $title = $content = $label = $url = '';

        if( isset( $entry[ 'icon' ] ) )         $icon = esc_html( $entry[ 'icon' ] );
        if( isset( $entry[ 'title' ] ) )        $title = esc_html( $entry[ 'title' ] );
        if( isset( $entry[ 'content' ] ) )      $content = esc_html( $entry[ 'content' ] );
        if( isset( $entry[ 'button_label' ] ) ) $label = esc_html( $entry[ 'button_label' ] );
        if( isset( $entry[ 'button_url' ] ) )   $url = esc_html( $entry[ 'button_url' ] );

        echo '<div class="global-menu-item  menu-item">';
          if( !empty( $icon ) ) {
            echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/' . $icon );
          }

          echo '<h3 class="screen-reader-text">' . $title . '</h3>';

          echo '<p>' . $content . '</p>';

          echo '<a href="' . $url . '">' . $label . '</a>';
        echo '</div>';
      }
    ?>
  </main>
</div>

<?php wp_footer(); ?>

</body>

</html>
