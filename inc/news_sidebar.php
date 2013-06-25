<?php

// Register Sidebar
function news_sidebar()  {
	$args = array(
		'id'            => 'news',
		'name'          => __( 'News Sidebar'),
		'description'   => __( 'Sidebar for news posts'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'news_sidebar' );

?>
