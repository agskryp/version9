/**
 * File animation.js.
 * Requires GSAP and TweenMax to execute
 */

( function() {
  /**
   * @param TweenMax.method( "target", speed, { settings }, delay between elements );
   */
  TweenMax.from( ".site-title-top", 2, {
    paddingLeft: "1em",
    opacity: 0,
    ease: Power1.easeInOut
  } );

  TweenMax.from( ".site-title-bottom", 2, {
    paddingRight: "1em",
    opacity: 0,
    ease: Power1.easeInOut
  } );

  TweenMax.staggerFrom( ".site-description span", 1, {
    bottom: "1em",
    opacity: 0,
    delay: 1.8
  }, .4 );
  
  if( window.innerWidth >= 768 ) {  
    TweenMax.from( ".site-description", 3, {
      borderLeft: "2px solid",
      opacity: 0,
      delay: 2
    }, );
  }

  TweenMax.staggerFrom( ".homepage-menu-item", 1, {
    bottom: "1em",
    opacity: 0,
    delay: 2.8
  }, 0.2 );
} )();
