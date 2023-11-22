<?php
/**
 * Custom taxonomies for use with this theme
 */

add_action( 'init', 'custom_taxonomies' );

/**
 * Adds custom taxonomies
 */
function custom_taxonomies() {
	// Offer category
	// register_taxonomy(
	// 'offer_category',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
	// 'offer',             // post type name
	// array(
	// 'hierarchical' => true,
	// 'label' => 'Categories', // display name
	// 'query_var' => true,
	// 'rewrite' => array(
	// 'slug' => 'offer',    // This controls the base slug that will display before each term
	// 'with_front' => false  // Don't display the category base before
	// ),
	// 'show_in_rest'          => true
	// )
	// );

	// Portfolio category
	register_taxonomy(
		'portfolio_category',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'portfolio',             // post type name
		array(
			'hierarchical' => true,
			'label'        => 'Categories', // display name
			'query_var'    => true,
			'rewrite'      => array(
				'slug'         => 'portfolio',    // This controls the base slug that will display before each term
				'with_front'   => false  // Don't display the category base before
			),
		'show_in_rest'     => true
		)
	);

	// Team category
	register_taxonomy(
		'team_category',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'team',             // post type name
		array(
			'hierarchical' => true,
			'label'        => 'Categories', // display name
			'query_var'    => true,
			'rewrite'      => array(
				'slug'         => 'team',    // This controls the base slug that will display before each term
				'with_front'   => false  // Don't display the category base before
			),
		'show_in_rest'     => true
		)
	);
}
