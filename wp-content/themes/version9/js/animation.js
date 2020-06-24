/**
 * File animation.js.
 * Requires TweenMax to execute
 */

( function() {

  /**
   * @param TweenMax.method( "target", speed, { settings }, delay between elements );
   */
  TweenMax.to( "#givenName", 2, {
    marginLeft: "0",
    opacity: 1,
    ease: Power1.easeInOut
  } );

  TweenMax.to( "#surName", 2, {
    marginRight: "0",
    opacity: 1,
    ease: Power1.easeInOut
  } );

  TweenMax.staggerTo( "#occupationAnimation span", 1, {
    bottom: "0",
    opacity: 1,
    delay: 1.8
  }, .4 );
  
  if( window.innerWidth >= 768 ) {  
    TweenMax.from( "#occupationAnimation", 3, {
      borderLeft: "2px solid",
      opacity: 0,
      delay: 2
    } );
  }

  TweenMax.staggerTo( ".menu-item", 1, {
    bottom: "0",
    opacity: 1,
    delay: 2.8
  }, .26 );
} )();
