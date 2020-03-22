<?php

function portfolio_post_type() {
  $labels = array(
    'name'                  => 'Portfolio',
    'singular_name'         => 'Portfolio',
    'menu_name'             => 'Portfolio',
    'name_admin_bar'        => 'Portfolio',
    'archives'              => 'Portfolio',
    'attributes'            => 'P_A',
    'parent_item_colon'     => 'P_P_I_C',
    'all_items'             => 'All Projects',
    'add_new_item'          => 'Add New Project',
    'add_new'               => 'Add Project',
    'new_item'              => 'New Project',
    'edit_item'             => 'Edit Project',
    'update_item'           => 'Update Project',
    'view_item'             => 'View Project',
    'view_items'            => 'View Projects',
    'search_items'          => 'Search Portfolio',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into site',
    'uploaded_to_this_item' => 'Uploaded to this site',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
  );
  
  $args = array(
    'label'                 => 'Portfolio',
    'description'           => 'Portfolio use for dev work',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'taxonomies' 	          => array( 'category' ),
  );
  
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_post_type', 0 );
