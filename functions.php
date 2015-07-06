<?php

// Our custom post type function
function create_posttype() {

	register_post_type( 'portfolio',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
