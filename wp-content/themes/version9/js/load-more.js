(function ($) {

  function load_more_func(e, el, item){
    e.preventDefault();
  
    // disable load more button for accidental double clicks
    el.prop('disabled',true);
  
  
    var button = el,
        max_page = el.attr('max-pages'),
        current_page = el.attr('current-page'),
        data = {
          'action': el.attr('action'),
          'search': el.attr('search'),
          'category_name': el.attr('category'),
          'tag': el.attr('tag'),
          'posts_per_page': el.attr('posts-per-page'),
          'excluded_ids': el.attr('excluded-ids'),
          'page' : current_page,
          'cat' : el.attr('cat')
        };
  
    // get the button text so it can be reset
    var buttonText = el.text();
  
  
    $.ajax( {
      url : '/wp-admin/admin-ajax.php', // AJAX handler
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        button.text( 'Loading...' ); // change the button text
      },
      
      success : function( html ){
  
        // re-enable the load more button
        el.prop('disabled',false);
  
        button.text( buttonText );
  
        if( html ) {
          item.append(html);
          button.attr('current-page', ++current_page);
          button.text = buttonText;
  
          if ( current_page === max_page ){
            button.hide(); // if last page
          }
        } else {
          button.hide(); // if no data
        }
        // change_button_text(html, loadmore_params.current_page, button, max_page)
      }
      });
  }
  
  
  $('.rcc-video-podcast-loadmore').click(function(e){

    load_more_func(e, $(this), $('.video-podcast-items'));
  });
  
})(jQuery);
  
  