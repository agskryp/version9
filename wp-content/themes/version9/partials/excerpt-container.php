<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
  <header class="entry-header">
    <div class="entry-meta">
      <?php echo get_the_category_list( ', ' ); ?>
    </div>

    <h2 class="entry-title">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
    </h2>
  </header>

  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
</article>
