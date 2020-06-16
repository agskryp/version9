<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-container' ); ?>>
  <header class="excerpt-header">
    <?php
      if( !empty( get_the_category_list( ', ' ) ) ) {
        echo '<div class="category-container">' . get_the_category_list( ', ' ) . '</div>';
      }
    ?>

    <h2 class="excerpt-title">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
    </h2>
  </header>

  <div class="excerpt-content">
    <?php the_excerpt(); ?>
  </div>
</article>
