<?php

function scripts_and_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/stylesheets/app.css' );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/javascripts/foundation/modernizr.foundation.js', array('jquery') );
	wp_enqueue_script( 'buttons', get_template_directory_uri() . '/javascripts/foundation/jquery.foundation.buttons.js', array('jquery') );
	wp_enqueue_script( 'forms', get_template_directory_uri() . '/javascripts/foundation/jquery.foundation.forms.js', array('jquery') );
	wp_enqueue_script( 'reveal', get_template_directory_uri() . '/javascripts/foundation/jquery.foundation.reveal.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'scripts_and_styles' );

register_nav_menu( 'footer', 'Footer Menu' );

add_theme_support( 'post-thumbnails' );

add_editor_style();

add_action( 'init', 'create_appearance_post_type' );
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
//
// Register Sidebar
function news_sidebar()  {
	$args = array(
		'id'            => 'news',
		'name'          => __( 'News Sidebar'),
		'description'   => __( 'Sidebar for blog'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'news_sidebar' );
//
// Register Sidebar
function generic_sidebar()  {
	$args = array(
		'id'            => 'generic',
		'name'          => __( 'Generic Sidebar'),
		'description'   => __( 'Sidebar for dates and index pages'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'generic_sidebar' );
//
// Register Sidebar
function page_sidebar()  {
	$args = array(
		'id'            => 'page',
		'name'          => __( 'Page Sidebar'),
		'description'   => __( 'Sidebar for Pages, to include press kit'),
		'before_title'  => '<h6 class=\"widgettitle\">',
		'after_title'   => '</h6>',
		'before_widget' => '<li id=\"%1$s\" class=\"widget %2$s\">',
		'after_widget'  => '</li>',
	);

	register_sidebar( $args );
}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'page_sidebar' );

//custom boxes
require( get_template_directory() . '/inc/custom_boxes.php' );

?>
