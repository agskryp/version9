<?php

// $theme = wp_get_theme();

// function static_blog_page() {
//   $blog_page_URL = get_post_type_archive_link( 'post' );
//   $blog_page_ID  = url_to_postid( $blog_page_URL );
//   $post_id       = intval( $_GET[ 'post' ] );
  
//   if( $blog_page_ID === $post_id ) {
//     return true;
//   }
  
//   return false;
// }

function portfolio_posts() {
  $cmb2 = new_cmb2_box( array(
    'id'           => 'portfolio_posts',
    'title'        => 'Portfolio Metaboxes',
    'object_types' => array( 'portfolio' ),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'cmb_styles'   => true, // false to disable the CMB stylesheet
  ) );
  
  $cmb2 -> add_field( array(
    'name' => 'Screenshot Date',
    'id'   => 'screenshot_date',
    'desc' => 'ex. March 12th, 2019',
    'type' => 'text'
  ) );

  $cmb2 -> add_field( array(
    'name' => 'Project URL',
    'id'   => 'project_url',
    'desc' => 'ex. agskryp.com',
    'type' => 'text_url'
  ) );

  $cmb2 -> add_field( array(
    'name'    => 'Project Type',
    'id'      => 'project_type',
    'type'    => 'radio_inline',
    'options' => array(
      'website'     => 'Website',
      'application' => 'Application',
    )
  ) );
}
add_action( 'cmb2_admin_init', 'portfolio_posts' );
