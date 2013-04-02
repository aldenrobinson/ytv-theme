<?php

add_action( 'init', 'create_artwork_post_type' );
function create_artwork_post_type() {
  register_post_type( 'artwork',
    array(
      'labels' => array(
		      'name' => __( 'Artworks' ),
		      'singular_name' => __( 'Artwork' )
		  ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'artwork', 'with_front' => FALSE ),
      'show_in_nav_menus' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
      //'menu_icon' => get_template_directory_uri() . '/paintings_icon.png',
      )
  );
}

//In the below, be careful of using "reserved words" --> http://codex.wordpress.org/Function_Reference/register_taxonomy#Reserved_Terms
//Also, when making changes, make sure to toggle Permalink type.  
function artwork_taxonomy() {  
   register_taxonomy(  
    'collection',  
    'artwork',  
    array(  
        'hierarchical' => true,  
        'label' => 'Collection',  
        'query_var' => true,  
        'show_ui' => true,
        'rewrite' => array('slug' => 'collection')  
		)  
	);  
} 

add_action( 'init', 'artwork_taxonomy' );

?>
