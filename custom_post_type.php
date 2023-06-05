<?php


add_action('init',function(){

	$args = array(
		'labels' => array(
				'name' => __( 'Books' ),
				'singular_name' => __( 'Book' )
		),
		'public' => true,	
		'supports' => array('title','thumbnail', 'editor', 'author', 'revisions')

	);
	register_post_type("book", $args);
	
});


add_action( "init",function(){
	// Set labels for teacher
	$labels = array(
			"name" => "Teachers",
			"singular_name" => "Teacher",
			"add_new"    => "Add Teacher",
			"add_new_item" => "Add New Teacher",
			"all_items" => "All Teachers",
			"edit_item" => "Edit Teacher",
			"new_item" => "New Teacher",
			"view_item" => "View Teacher",
			"search_items" => "Search Teachers",
	);
	// Set Options for teacher
	$args = array(    
			"public" => true,
			"label"       => "Teachers",
			"labels"      => $labels,
			"description" => "Teachers custom post type.",
			"menu_icon"      => "dashicons-admin-post",    
			"supports"   => array( "title", "editor", "thumbnail"),
			"capability_type" => "post",
			"publicly_queryable"  => true,
			"exclude_from_search" => false
	);
	register_post_type("teacher", $args);
	
});