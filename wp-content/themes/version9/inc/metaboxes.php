<?php

function static_blog_page() {
  $blog_page_URL = get_post_type_archive_link( 'post' );
  $blog_page_ID  = url_to_postid( $blog_page_URL );
  $post_id       = intval( $_GET[ 'post' ] );
  
  if( $blog_page_ID === $post_id ) {
    return true;
  }
  
  return false;
}

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

function front_page_menu() {
  $cmb2 = new_cmb2_box( array(
    'id'           => 'front_page_menu',
    'title'        => 'Front Page Nav Menu',
    'object_types' => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-front.php' ),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'cmb_styles'   => true, // false to disable the CMB stylesheet
  ) );

  $nav_menu_id = $cmb2 -> add_field( array(
    'id'          => 'front_page_menu_group',
    'type'        => 'group',
    'options'     => array(
      'group_title'       => 'Item {#}',
      'add_button'        => 'Add Another Item',
      'remove_button'     => 'Remove Item',
      'sortable'          => true,
    ),
  ) );
  
  $cmb2 -> add_group_field( $nav_menu_id, array(
    'name' => 'SVG Icon',
    'id'   => 'icon',
    'desc' => 'Enter full filename.',
    'type' => 'text_medium'
  ) );

  $cmb2 -> add_group_field( $nav_menu_id, array(
    'name' => 'Title',
    'id'   => 'title',
    'type' => 'text'
  ) );

  $cmb2 -> add_group_field( $nav_menu_id, array(
    'name' => 'Content',
    'id'   => 'content',
    'type' => 'textarea_small'
  ) );

  $cmb2 -> add_group_field( $nav_menu_id, array(
    'name' => 'Button Label',
    'id'   => 'button_label',
    'type' => 'text'
  ) );

  $cmb2 -> add_group_field( $nav_menu_id, array(
    'name' => 'Button URL',
    'id'   => 'button_url',
    'type' => 'text_url'
  ) );
}
add_action( 'cmb2_admin_init', 'front_page_menu' );
