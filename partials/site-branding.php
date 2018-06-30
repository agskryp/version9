<div class="site-branding">
  <?php if ( is_front_page() ) { ?>
    <h1 class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <span>
          Andrew
        </span>

        <span>
          Skrypnyk
        </span>
      </a>
    </h1>
  
    <div class="site-description">
      <h2 class="text-center">
        <span>
          Web Design
        </span>

        <span>
          &amp; Development
        </span>
      </h2>
    </div>
  
  <?php } else { ?>
    <p class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <span>
          Andrew
        </span>

        <span>
          Skrypnyk
        </span>
      </a>
    </p>
  
    <div class="site-description">
      <p class="text-center">
        <span>
          Web Design
        </span>

        <span>
          &amp; Development
        </span>
      </p>
    </div>
  
  <?php } ?>
</div>
