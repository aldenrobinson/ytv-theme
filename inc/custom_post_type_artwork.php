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
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      //'menu_icon' => get_template_directory_uri() . '/paintings_icon.png',
      )
  );
}

function artwork_taxonomy() {  
   register_taxonomy(  
    'artwork_type',  
    'artwork',  
    array(  
        'hierarchical' => true,  
        'label' => 'Artwork',  
        'query_var' => true,  
        'show_ui' => true,
        'rewrite' => array('slug' => 'artwork_type')  
		)  
	);  
} 

add_action( 'init', 'artwork_taxonomy' );

?>
