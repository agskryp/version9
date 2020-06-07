<?php
  if( have_posts() ) { 
    require( 'search-content.php' ); 
  }
  
  else {
    require( 'search-empty.php' ); 
  }
?>
 