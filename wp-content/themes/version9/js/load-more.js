( function($) {
  function load_more_function( e, el, item ) {
    e.preventDefault();
  
    // disable load more button for accidental double clicks
    el.prop( 'disabled', true );
  
    var container     = document.getElementById( 'loadMoreButtonContainer' ),
        button        = el,
        buttonText    = el.text(),
        max_page      = el.attr( 'max-pages' ),
        current_page  = el.attr( 'current-page' ),
        x_cord        = e.pageX,
        y_cord        = e.pageY,
        scrollOptions = {
          left: x_cord,
          top: y_cord - 50,
          behavior: 'auto'
        },
        
        data = {
          'action': el.attr( 'action' ),
          'posts_per_page': el.attr( 'posts-per-page' ),
          'category_name': el.attr( 'category-name' ),
          'search_value': el.attr( 'search' ),
          'page': current_page,
        };

    $.ajax( { // jQuery
      url: '/wp-admin/admin-ajax.php',
      data: data,
      type: 'POST',

      beforeSend: function( xhr ) {
        button.text( 'Loading...' );
      },
      
      success: function( html ) {        
        el.prop( 'disabled', false );
  
        button.text( buttonText );
  
        if( html ) {
          item.append( html );
          
          button.attr( 'current-page', ++current_page );
          button.text = buttonText;
  
          if( current_page > max_page ) {
            container.style.display = 'none'; // if last page
          }
        }
        
        else {
          container.style.display = 'none'; // if no data
        }
      
        window.scrollTo( scrollOptions );

        return false;
      }
    } );
  }
  
  document.querySelector( '.load-more-blog-posts' ).addEventListener( 'click', function(e) {
    load_more_function( e, $( this ), $( '.excerpt-list-container' ) ); // jQuery
  } );
} )( jQuery );
  
// Vanilla JS click event
// document.getElementById("okButton").addEventListener("click", function() {
// document.querySelector("load-more-blog-posts").addEventListener("click", function() {
//   document.getElementById("welcome").hidden = true;
//   document.getElementById("awesome").hidden = false;
// }, false);
