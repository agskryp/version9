<?php

// Register Custom Post Type
function portfolio_post_type() {
	$labels = array(
		'name'                  => 'Portfolio',
		'singular_name'         => 'Portfolio',
		'menu_name'             => 'Portfolio',
		'name_admin_bar'        => 'Portfolio',
		'archives'              => 'Portfolio',
		'attributes'            => '',
		'parent_item_colon'     => '',
		'all_items'             => '',
		'add_new_item'          => 'Add New Site',
		'add_new'               => 'Add Site',
		'new_item'              => 'New Site',
		'edit_item'             => 'Edit Site',
		'update_item'           => 'Update Site',
		'view_item'             => 'View Site',
		'view_items'            => 'View Sites',
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
		'description'           => 'Portfolio use for web dev work',
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
		'capability_type'       => 'page',
	);
  
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_post_type', 0 );