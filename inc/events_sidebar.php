<?php

// Register Sidebar
function events_sidebar()  {
	$args = array(
		'id'            => 'events',
		'name'          => __( 'Events Sidebar'),
		'description'   => __( 'Events Sidebar'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'events_sidebar' );

?>
