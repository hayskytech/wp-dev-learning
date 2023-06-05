<?php
add_action( 'init', function() {
	$labels = array(
		'name'              => _x( 'Subjects', 'taxonomy general name' ),
		'singular_name'     => _x( 'Subject', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Subjects' ),
		'all_items'         => __( 'All Subjects' ),
		'parent_item'       => __( 'Parent Subject' ),
		'parent_item_colon' => __( 'Parent Subject:' ),
		'edit_item'         => __( 'Edit Subject' ),
		'update_item'       => __( 'Update Subject' ),
		'add_new_item'      => __( 'Add New Subject' ),
		'new_item_name'     => __( 'New Subject Name' ),
		'menu_name'         => __( 'Subject' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'subject' ],
	);
	register_taxonomy( 'subject', [ 'book' , 'teacher' ], $args );
});