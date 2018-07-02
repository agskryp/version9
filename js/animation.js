/**
 * File animation.js.
 * Requires GSAP and TweenMax to execute
 */

( function ( ) {
  /**
   * @param TweenMax.method( "target", duration, { settings } );
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
    delay: 1.5
  }, -0.3 );

  TweenMax.staggerFrom( ".homepage-menu-item", 1, {
    bottom: "1em",
    opacity: 0,
    delay: 2
  }, 0.2 );
} )(  );
