<?php
	add_action( 'init', 'create_program_post_type' );
	function create_program_post_type() {
	  register_post_type( 'program',
	    array(
	      'labels' => array(
			      'name' => __( 'Programs' ),
			      'singular_name' => __( 'Program' )
			  ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'programs'),
	      'show_in_nav_menus' => true
	      )
	  );
	}

	add_action( 'init', 'create_video_post_type' );
	function create_video_post_type() {
	  register_post_type( 'video',
	    array(
	      'labels' => array(
			      'name' => __( 'Videos' ),
			      'singular_name' => __( 'Video' )
			  ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'videos'),
	      'show_in_nav_menus' => false
	      )
	  );
	}
	add_action( 'init', 'create_highlight_post_type' );
	function create_highlight_post_type() {
	  register_post_type( 'highlight',
	    array(
	      'labels' => array(
			      'name' => __( 'Highlights' ),
			      'singular_name' => __( 'Highlight' )
			  ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'highlights'),
	      'show_in_nav_menus' => true,
	      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
	      )
	  );
	}
?>

