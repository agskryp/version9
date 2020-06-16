( function ($) {
  function load_more_func( e, el, item ) {
    e.preventDefault();
  
    // disable load more button for accidental double clicks
    el.prop( 'disabled', true );
  
    var button = el,
        buttonText = el.text(),
        max_page = el.attr( 'max-pages' ),
        current_page = el.attr( 'current-page' ),
        data = {
          'action': el.attr( 'action' ),
          'posts_per_page': el.attr( 'posts-per-page' ),
          'category_name': el.attr( 'category-name' ),
          'search_value': el.attr( 'search' ),
          'page': current_page,
        };

        // need to target elements this way.  Try using
        // ClassName or querySelector
        var container = document.getElementById( 'loadMore' );

  
    $.ajax( {
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
      }
    } );
  }
  
  $( '.load-more-blog-posts' ).click( function(e) {
    load_more_func( e, $( this ), $( '.excerpt-list-container' ) );
  } );
} )( jQuery );
  
// Vanilla JS click event
// document.getElementById("okButton")
//         .addEventListener("click", function() {
//   document.getElementById("welcome").hidden = true;
//   document.getElementById("awesome").hidden = false;
// }, false);
