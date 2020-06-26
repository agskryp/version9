<?php

/**
 * Best embedding of google fonts
 * <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com -->
 */
function themeprefix_load_fonts() { 
  ob_start();
?> 
  <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,300,700" as="fetch" crossorigin="anonymous"> 
  <script type="text/javascript"> 
  !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Lato:100,300,700",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
  </script>
<?php
  ob_end_flush();
}
add_action( 'wp_head', 'themeprefix_load_fonts' );
