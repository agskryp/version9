<?php
  /* Template Name: Portfolio */

  get_header(); 

  query_posts( array(
    'post_type' => 'portfolio'
  ) );
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main portfolio-page">
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      
      <p>
        Select a site for more infomation
      </p>
    </header>
    
    
    <div class="text-center">
      <?php  
        while ( have_posts() ) :
          the_post();

          if ( has_post_thumbnail() ) {
      ?>
    
        <a href="<?php echo get_permalink(); ?>">
          <div class="entry-content">

           <span style="text-align: center; display: block; text-transform: uppercase; font-weight: 700; color: WHITE;">
                  <?php  the_title(); ?>
              </span>

              <figure class="portfolio-archive-image">
      
            <?php the_post_thumbnail(); ?>
        
    </figure>
        </div>
         </a>
    <?php
}
endwhile;
    
    
    ?>
      
    </div>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
