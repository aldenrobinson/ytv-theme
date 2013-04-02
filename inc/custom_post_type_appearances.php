<?php
Create post type "appearances"
function create_appearance_post_type() {
  register_post_type( 'appearance',
    array(
      'labels' => array(
		      'name' => __( 'Appearances' ),
		      'singular_name' => __( 'Appearance' )
		  ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'appearances'),
      'show_in_nav_menus' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
      )
  );
}

add_action( 'init', 'create_appearance_post_type' );
?>
