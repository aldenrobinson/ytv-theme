<?php

// Register Sidebar
function programs_sidebar()  {
	$args = array(
		'id'            => 'program',
		'name'          => __( 'Programs Sidebar'),
		'description'   => __( 'Sidebar for dates and index pages'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'programs_sidebar' );

?>
