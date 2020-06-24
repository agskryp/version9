/**
 * File animation.js.
 * Requires GSAP and TweenMax to execute
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

  TweenMax.staggerFrom( "#occupationAnimation span", 1, {
    bottom: "56px",
    opacity: 0,
    delay: 1.8
  }, .4 );
  
  if( window.innerWidth >= 768 ) {  
    TweenMax.from( "#occupationAnimation", 3, {
      borderLeft: "2px solid",
      opacity: 0,
      delay: 2
    } );
  }

  TweenMax.staggerFrom( ".menu-item", 1, {
    bottom: "56px",
    opacity: 0,
    delay: 2.8
  }, 0.2 );
} )();
