/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
  // Declare variables
  var searchContainer, navContainer, contentContainer, container,
      searchButton, button, searchForm, menu, links, i, len;
  
  // Search form container, return if it doesn't exist
  searchContainer = document.getElementById( 'site-search' );
  if ( !searchContainer ) {
    return;
  }
  
  // Navigation menu container, return if it doesn't exist
  navContainer = document.getElementById( 'main-navigation' );
  if ( !navContainer ) {
    return;
  }

  // Content body container, return if it doesn't exist
  contentContainer = document.getElementById( 'content' );
  if ( !contentContainer ) {
    return;
  }
  
  // Buttons, navigation menu, and search form container, return if it doesn't exist
  container = document.getElementById( 'site-navigation' );
  if ( !container ) {
    return;
  }
  
  // Search button, return if element's undefined
  searchButton = container.getElementsByTagName( 'button' )[ 1 ];
  if ( 'undefined' === typeof searchButton ) {
    return;
  }
  
  // Menu button, return if element's undefined
  button = container.getElementsByTagName( 'button' )[ 0 ];
  if ( 'undefined' === typeof button ) {
    return;
  }
  
  // Search form, return if element's undefined
  searchForm = searchContainer.getElementsByTagName( 'form' )[ 0 ];
  if ( 'undefined' === typeof searchForm ) {
    searchButton.style.display = 'none';
    return;
  }
  
  // Navigation menu list, hide menu button and return if element's undefined
  menu = container.getElementsByTagName( 'ul' )[ 0 ];
  if ( 'undefined' === typeof menu ) {
    button.style.display = 'none';
    return;
  }
  
  // Because the navigation menu is created with wp_nav_menu(), use javascript
  // to set aria-expanded to false, check if the navigation menu has '.nav-menu'
  // If it doesn't, add '.nav-menu' (important for the toggleFocus function)
  menu.setAttribute( 'aria-expanded', 'false' );
  if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
    menu.classList.add( 'nav-menu' );
  }
  
  // Navigation menu anchor tags
  links = menu.getElementsByTagName( 'a' );
  
  // Total number of links in navigation menu
  len = links.length;
  
  
  // When executed, remove '.toggled' from search form container, set aria-expanded on the
  // search button and search form to false, and remove '.on' from the search button
  function toggleSearchOff() {
    searchContainer.classList.remove( 'toggled' );
    searchButton.setAttribute( 'aria-expanded', 'false' );
    searchForm.setAttribute( 'aria-expanded', 'false' );
    searchButton.classList.remove( 'on' );
  }
  
  // When executed, apply '.toggled' to the search form container, set aria-expanded on the
  // search button and search form to true, and apply '.on' to the search button
  function toggleSearchOn() {
    searchContainer.classList.add( 'toggled' );
    searchButton.setAttribute( 'aria-expanded', 'true' );
    searchForm.setAttribute( 'aria-expanded', 'true' );
    searchButton.classList.add( 'on' );
  }
  
  // When executed, remove '.toggled' from navigation menu container, set aria-expanded on the
  // menu button and navigation menu list to false, and remove '.on' from the menu button
  function toggleMenuOff() {
    navContainer.classList.remove( 'toggled' );
    button.setAttribute( 'aria-expanded', 'false' );
    menu.setAttribute( 'aria-expanded', 'false' );
    button.classList.remove( 'on' );
  }
  
  // When executed, apply '.toggled' to navigation menu container, set aria-expanded on the
  // menu button and navigation menu list to true, and apply '.on' to the menu button
  function toggleMenuOn() {
    navContainer.classList.add ( 'toggled' );
    button.setAttribute( 'aria-expanded', 'true' );
    menu.setAttribute( 'aria-expanded', 'true' );
    button.classList.add( 'on' );
  }
  
  // When the search button is clicked, check if the search form container has '.toggled'
  // If true, execute the toggleSearchOff function.
  // Else, execute the toggleSearchOn function
  searchButton.onclick = function () {
    if ( -1 !== searchContainer.className.indexOf( 'toggled' ) ) {
      toggleSearchOff();
    } else {
      toggleSearchOn();
    }
  };
  
  // When the menu button is clicked, check if the navigation menu container has '.toggled'
  // If true, execute the toggleMenuOff function.
  // Else, execute the toggleMenuOn function
  button.onclick = function () {
    if ( -1 !== navContainer.className.indexOf( 'toggled' ) ) {
      toggleMenuOff();
    } else {
      toggleMenuOn();
    }
  };
  
  // When the body content container is clicked, check if the search form container
  // or the navigation menu container has '.toggled'.  If true, execute the 
  // toggleSearchOff or toggleMenuOff function respectively.
  contentContainer.onclick = function () {
    if ( -1 !== searchContainer.className.indexOf( 'toggled' ) ) {
      toggleSearchOff();
    }
    if ( -1 !== navContainer.className.indexOf( 'toggled' ) ) {
      toggleMenuOff();
    }
  };
  
  // Sets or removes .focus class on an element
  function toggleFocus() {
    var self = this;

    // Move up through the ancestors of the current link until we hit .nav-menu
    while ( -1 === self.className.indexOf( 'nav-menu' ) ) {
      // On li elements toggle the class .focus
      if ( 'li' === self.tagName.toLowerCase() ) {
        if ( -1 !== self.className.indexOf( 'focus' ) ) {
          self.classList.remove( 'focus' );
        } else {
          self.classList.add( 'focus' );
        }
      }

      self = self.parentElement;
    }
  }

  // Each time a menu link is focused or blurred, toggle focus.
  for ( i = 0; i < len; i += 1 ) {
    links[ i ].addEventListener( 'focus', toggleFocus, true );
    links[ i ].addEventListener( 'blur', toggleFocus, true );
  }

  // Toggles `focus` class to allow submenu access on tablets.
  (function ( container ) {
    var touchStartFn, i, parentLink;
    
    parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

    if ( 'ontouchstart' in window ) {
      touchStartFn = function ( e ) {
        var i, menuItem;
            
        menuItem = this.parentNode;

        if ( !menuItem.classList.contains( 'focus' ) ) {
          e.preventDefault();
          
          for ( i = 0; i < menuItem.parentNode.children.length; i += 1) {
            if ( menuItem === menuItem.parentNode.children[ i ] ) {
              continue;
            }
            
            menuItem.parentNode.children[ i ].classList.remove( 'focus' );
          }
          
          menuItem.classList.add( 'focus' );
        } else {
          menuItem.classList.remove( 'focus' );
        }
      };

      for ( i = 0; i < parentLink.length; i += 1 ) {
        parentLink[ i ].addEventListener( 'touchstart', touchStartFn, false );
      }
    }
  } ( container ) );
} ) ();
