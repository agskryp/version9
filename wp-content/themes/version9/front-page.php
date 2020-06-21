<?php
  /**
   * The front page file.
   */

  require get_template_directory() . '/partials/doctype.php';
?>

<div class="front-page-container">
  <header class="header-container">
    <h1 class="name-container">
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
  
          echo '<div class="menu-item">';
            echo $icon . '<h3 class="screen-reader-text">' . $title . '</h3>';

            echo '<p>' . $content . '</p>';

            echo '<a href="' . $url . '">' . $label . '</a>';
          echo '</div>';
        }
      ?>


        <div class="menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
            <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/>
            
            
          </svg>
          <h3 class="screen-reader-text">Biography</h3>

          <p>Learn about the man behind the page on a computer beyond the internet</p>

          <a href="<?php echo esc_url( AG_ABOUT ); ?>">About Me</a>
</div>

    </main>
</div>

<?php wp_footer(); ?>

</body>

</html>
