<?php

function origin_taxonomies() {
	$taxonomy_name  = "gender";
	$single_name    = "Gender";
	$plural_name    = "Genders";
	$post_type      = "artists";

	$labels = array(
		'name'              => $single_name,
		'singular_name'     => $single_name,
		'search_items'      => 'Search ' . $plural_name,
		'all_items'         => 'All ' . $plural_name,
		'parent_item'       => 'Parent ' . $single_name,
		'parent_item_colon' => 'Parent ' . $single_name . ':',
		'edit_item'         => 'Edit ' . $single_name,
		'update_item'       => 'Update ' . $single_name,
		'add_new_item'      => 'Add New ' . $single_name,
		'new_item_name'     => 'New ' . $single_name . ' Name',
		'menu_name'         => $single_name
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => '' ),
	);

	register_taxonomy( $taxonomy_name, $post_type, $args );

	$taxonomy_name  = "age";
	$single_name    = "Age";
	$plural_name    = "Age";
	$post_type      = "artists";

	$labels = array(
	    'name'              => $single_name,
	    'singular_name'     => $single_name,
	    'search_items'      => 'Search ' . $plural_name,
	    'all_items'         => 'All ' . $plural_name,
	    'parent_item'       => 'Parent ' . $single_name,
	    'parent_item_colon' => 'Parent ' . $single_name . ':',
	    'edit_item'         => 'Edit ' . $single_name,
	    'update_item'       => 'Update ' . $single_name,
	    'add_new_item'      => 'Add New ' . $single_name,
	    'new_item_name'     => 'New ' . $single_name . ' Name',
	    'menu_name'         => $single_name
	);

	$args = array(
	    'hierarchical'      => true,
	    'labels'            => $labels,
	    'show_ui'           => true,
	    'show_admin_column' => true,
	    'query_var'         => true,
	    'rewrite'           => array( 'slug' => '' ),
	);

	register_taxonomy( $taxonomy_name, $post_type, $args );

	$taxonomy_name  = "languages";
	$single_name    = "Languages";
	$plural_name    = "Languages";
	$post_type      = "artists";

	$labels = array(
	    'name'              => $single_name,
	    'singular_name'     => $single_name,
	    'search_items'      => 'Search ' . $plural_name,
	    'all_items'         => 'All ' . $plural_name,
	    'parent_item'       => 'Parent ' . $single_name,
	    'parent_item_colon' => 'Parent ' . $single_name . ':',
	    'edit_item'         => 'Edit ' . $single_name,
	    'update_item'       => 'Update ' . $single_name,
	    'add_new_item'      => 'Add New ' . $single_name,
	    'new_item_name'     => 'New ' . $single_name . ' Name',
	    'menu_name'         => $single_name
	);

	$args = array(
	    'hierarchical'      => true,
	    'labels'            => $labels,
	    'show_ui'           => true,
	    'show_admin_column' => true,
	    'query_var'         => true,
	    'rewrite'           => array( 'slug' => '' ),
	);

	register_taxonomy( $taxonomy_name, $post_type, $args );
}