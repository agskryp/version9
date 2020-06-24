/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

( function() {
  
  // Declare variables
  var searchContainer  = document.getElementById( 'searchNavigation' );
  var navContainer     = document.getElementById( 'mainNavigation' );
  var contentContainer = document.getElementById( 'content' );
  var container        = document.getElementById( 'siteNavigation' );
  var searchButton     = document.getElementById( 'searchButton' );
  var button           = document.getElementById( 'menuButton' );

  var searchForm = searchContainer.getElementsByTagName( 'form' )[0];
  var menu       = container.getElementsByTagName( 'ul' )[0];
  
  // Because the navigation menu is created with wp_nav_menu(), use javascript to set aria-expanded to false
  menu.setAttribute( 'aria-expanded', 'false' );
  
  function toggleSearchOff() {
    searchContainer.classList.remove( 'toggled' );
    searchButton.setAttribute( 'aria-expanded', 'false' );
    searchForm.setAttribute( 'aria-expanded', 'false' );
    searchButton.classList.remove( 'on' );
  }
  
  function toggleSearchOn() {
    searchContainer.classList.add( 'toggled' );
    searchButton.setAttribute( 'aria-expanded', 'true' );
    searchForm.setAttribute( 'aria-expanded', 'true' );
    searchButton.classList.add( 'on' );
  }

  function toggleMenuOff() {
    navContainer.classList.remove( 'toggled' );
    button.setAttribute( 'aria-expanded', 'false' );
    menu.setAttribute( 'aria-expanded', 'false' );
    button.classList.remove( 'on' );
  }

  function toggleMenuOn() {
    navContainer.classList.add ( 'toggled' );
    button.setAttribute( 'aria-expanded', 'true' );
    menu.setAttribute( 'aria-expanded', 'true' );
    button.classList.add( 'on' );
  }
  
  searchButton.onclick = function() {
    if( searchContainer.classList.contains( 'toggled' ) ) {
      toggleSearchOff();

      return;
    } 
    
    toggleSearchOn();
  };
  
  button.onclick = function() {
    if( navContainer.classList.contains( 'toggled' ) ) {
      toggleMenuOff();

      return;
    } 
    
    toggleMenuOn();
  };
  
  contentContainer.onclick = function() {
    toggleSearchOff();
    toggleMenuOff();
  };
} ) ();
