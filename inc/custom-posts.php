<?php
/**
 * Custom posts for use with this theme
 */

add_action( 'init', 'custom_post_type', 0 );
/**
 * Register Custom Post Type
 */
function custom_post_type() {
	// Register Offer Custom Post Type
	// $labels = array(
	// 'name'                  => _x( 'Offers', 'offers', 'text_domain' ),
	// 'singular_name'         => _x( 'Offer', 'offer', 'text_domain' ),
	// 'menu_name'             => __( 'Offers', 'text_domain' ),
	// 'name_admin_bar'        => __( 'Offers', 'text_domain' ),
	// 'archives'              => __( 'Offers Archives', 'text_domain' ),
	// 'attributes'            => __( 'Offers Attributes', 'text_domain' ),
	// 'parent_item_colon'     => __( 'Parent Offers:', 'text_domain' ),
	// 'all_items'             => __( 'All Offers', 'text_domain' ),
	// 'add_new_item'          => __( 'Add Offer', 'text_domain' ),
	// 'add_new'               => __( 'Add Offer', 'text_domain' ),
	// 'new_item'              => __( 'New Offer', 'text_domain' ),
	// 'edit_item'             => __( 'Edit Offer', 'text_domain' ),
	// 'update_item'           => __( 'Update Offer', 'text_domain' ),
	// 'view_item'             => __( 'View Offer', 'text_domain' ),
	// 'view_items'            => __( 'View Offers', 'text_domain' ),
	// 'search_items'          => __( 'Search Offers', 'text_domain' ),
	// 'not_found'             => __( 'Not found', 'text_domain' ),
	// 'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 'insert_into_item'      => __( 'Insert into Offer', 'text_domain' ),
	// 'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'text_domain' ),
	// 'items_list'            => __( 'Offers list', 'text_domain' ),
	// 'items_list_navigation' => __( 'Offers list navigation', 'text_domain' ),
	// 'filter_items_list'     => __( 'Filter Offers list', 'text_domain' ),
	// );
	// $args = array(
	// 'label'                 => __( 'Offers', 'text_domain' ),
	// 'description'           => __( 'Offers post type', 'text_domain' ),
	// 'labels'                => $labels,
	// 'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
	// 'hierarchical'          => true,
	// 'public'                => true,
	// 'show_ui'               => true,
	// 'show_in_menu'          => true,
	// 'show_in_rest'          => true,
	// 'menu_position'         => 5,
	// 'show_in_admin_bar'     => true,
	// 'show_in_nav_menus'     => true,
	// 'can_export'            => true,
	// 'has_archive'           => false,
	// 'exclude_from_search'   => false,
	// 'publicly_queryable'    => true,
	// 'capability_type'       => 'post',
	// 'menu_icon'             => 'dashicons-media-text'
	// );
	// register_post_type( 'offer', $args );

	// Register Portfolio Custom Post Type
	$labels = array(
		'name'                  => _x( 'Portfolios', 'portfolios', 'text_domain' ),
		'singular_name'         => _x( 'Portfolio', 'portfolio', 'text_domain' ),
		'menu_name'             => __( 'Portfolios', 'text_domain' ),
		'name_admin_bar'        => __( 'Portfolios', 'text_domain' ),
		'archives'              => __( 'Portfolios Archives', 'text_domain' ),
		'attributes'            => __( 'Portfolios Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Portfolios:', 'text_domain' ),
		'all_items'             => __( 'All Portfolios', 'text_domain' ),
		'add_new_item'          => __( 'Add Portfolio', 'text_domain' ),
		'add_new'               => __( 'Add Portfolio', 'text_domain' ),
		'new_item'              => __( 'New Portfolio', 'text_domain' ),
		'edit_item'             => __( 'Edit Portfolio', 'text_domain' ),
		'update_item'           => __( 'Update Portfolio', 'text_domain' ),
		'view_item'             => __( 'View Portfolio', 'text_domain' ),
		'view_items'            => __( 'View Portfolios', 'text_domain' ),
		'search_items'          => __( 'Search Portfolios', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'text_domain' ),
		'items_list'            => __( 'Portfolios list', 'text_domain' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'text_domain' ),
		'description'           => __( 'Portfolio post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-welcome-view-site'
	);
	register_post_type( 'portfolio', $args );

	// Register Team Custom Post Type
	$labels = array(
		'name'                  => _x( 'Teams', 'teams', 'text_domain' ),
		'singular_name'         => _x( 'Team', 'team', 'text_domain' ),
		'menu_name'             => __( 'Teams', 'text_domain' ),
		'name_admin_bar'        => __( 'Teams', 'text_domain' ),
		'archives'              => __( 'Teams Archives', 'text_domain' ),
		'attributes'            => __( 'Teams Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Teams:', 'text_domain' ),
		'all_items'             => __( 'All Teams', 'text_domain' ),
		'add_new_item'          => __( 'Add Team', 'text_domain' ),
		'add_new'               => __( 'Add Team', 'text_domain' ),
		'new_item'              => __( 'New Team', 'text_domain' ),
		'edit_item'             => __( 'Edit Team', 'text_domain' ),
		'update_item'           => __( 'Update Team', 'text_domain' ),
		'view_item'             => __( 'View Team', 'text_domain' ),
		'view_items'            => __( 'View Teams', 'text_domain' ),
		'search_items'          => __( 'Search Teams', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Team', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'text_domain' ),
		'items_list'            => __( 'Teams list', 'text_domain' ),
		'items_list_navigation' => __( 'Teams list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Teams list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'text_domain' ),
		'description'           => __( 'Team post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-businessperson'
	);
	register_post_type( 'team', $args );
}
