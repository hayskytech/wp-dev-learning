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