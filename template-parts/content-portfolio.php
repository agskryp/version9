<?php
  /**
   * Template part for displaying page content in page-portfolio.php
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   * @package version9
   */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  
  
  <header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
  
  <?php $portfolio = get_field( 'portfolio' );
  
  var_dump( $portfolio );
  
  ?>

 
  
<div id="post-<?php the_ID(); ?>" class="portfolio-archive-project">
     DESIGN SCREENSHOT + SITE TITLE LAYOUT FOR PORTFOLIO
   <span style="text-align: center; display: block;">
                <?php the_title(); ?>
            </span>
        <?php if ( has_post_thumbnail() ) { ?>
    <figure class="portfolio-archive-image">
        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
            <?php the_post_thumbnail(); ?>
            <span style="text-align: center; display: block;">
                <?php the_title(); ?>
            </span>
        </a>
    </figure>
        <?php } ?>    
    
</div><!-- #post-## -->
</article>
