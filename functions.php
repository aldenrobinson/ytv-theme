<?php

//Load stylesheets
function load_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/stylesheets/app.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/stylesheets/normalize.css' );
}

add_action( 'wp_enqueue_scripts', 'load_styles' );

//Load javascripts
//Enqueued scripts will be loaded on all pages.  Registered scripts can be enqueued by their handles wherever needed.
function load_scripts() {
	//First, deregister the version of jQuery included with Wordpress and load the newest version from Google CDN.  Foundation scripts depend on the newest version.
	if( !is_admin() ){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
		wp_enqueue_script('jquery');
	}
	wp_register_script( 'app', get_template_directory_uri() . '/javascripts/app.js', array('jquery', 'foundation'), '', true ); //This includes the custom code required for Foundation. 
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/javascripts/vendor/custom.modernizr.js' ); //This includes the HTML5 shim. Must load in header.
	//wp_register_script( 'zepto', get_template_directory_uri() . '/javascripts/vendor/zepto.js' ); //Zepto.  Not using this for now...just going with jQuery because some plugins will need it anyway.
	wp_register_script( 'foundation', get_template_directory_uri() . '/javascripts/foundation/foundation.js', array('jquery'), '', true ); //This is required to load along with any plugins below. This is not the minified version of all the plugins a la some other versions of Foundation.
	wp_register_script( 'alerts', get_template_directory_uri() . '/javascripts/foundation/foundation.alerts.js', array('jquery') );
	wp_register_script( 'clearing', get_template_directory_uri() . '/javascripts/foundation/foundation.clearing.js', array('jquery') );
	wp_register_script( 'cookie', get_template_directory_uri() . '/javascripts/foundation/foundation.cookie.js', array('jquery') );
	wp_register_script( 'dropdown', get_template_directory_uri() . '/javascripts/foundation/foundation.dropdown.js', array('jquery') );
	wp_register_script( 'forms', get_template_directory_uri() . '/javascripts/foundation/foundation.forms.js', array('jquery', 'foundation'), '', true );
	wp_register_script( 'joyride', get_template_directory_uri() . '/javascripts/foundation/foundation.joyride.js', array('jquery') );
	wp_register_script( 'magellan', get_template_directory_uri() . '/javascripts/foundation/foundation.magellan.js', array('jquery') );
	wp_register_script( 'orbit', get_template_directory_uri() . '/javascripts/foundation/foundation.orbit.js', array('jquery', 'foundation'), '', true );
	wp_register_script( 'placeholder', get_template_directory_uri() . '/javascripts/foundation/foundation.placeholder.js', array('jquery') );
	wp_register_script( 'reveal', get_template_directory_uri() . '/javascripts/foundation/foundation.reveal.js', array('jquery', 'foundation'), '', true );
	wp_register_script( 'section', get_template_directory_uri() . '/javascripts/foundation/foundation.section.js', array('jquery', 'foundation'), '', true );
	wp_register_script( 'tooltips', get_template_directory_uri() . '/javascripts/foundation/foundation.tooltips.js', array('jquery') );
	wp_register_script( 'topbar', get_template_directory_uri() . '/javascripts/foundation/foundation.topbar.js', array('jquery', 'foundation'), '', true );
	//Okay, now call those of the above registered scripts that you want to use throughout the site.  If you have one that will load on only one template, call it there instead. For example:
	wp_enqueue_script('foundation'); 
	wp_enqueue_script('app');
	wp_enqueue_script('reveal'); 
	//wp_enqueue_script('orbit'); ENQUEUED CONTEXTUALLY
	//wp_enqueue_script('section'); ENQUEUED CONTEXTUALLY
	wp_enqueue_script('forms'); 
	wp_enqueue_script('topbar');
	}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

//Call Top Bar Walker functions https://gist.github.com/awshout/3943026
require( get_template_directory() . '/inc/foundation-topbar-menu.php' );
require( get_template_directory() . '/inc/foundation-topbar-walker.php' );

//Register nav menus THIS IS OVERRIDDEN BY THE ABOVE
//register_nav_menu( 'Main', 'Main Menu' );
register_nav_menu( 'footer', 'Footer Menu' );

//Add thumbnail support
add_theme_support( 'post-thumbnails' );
add_image_size( 'highlightslide', 1200, 600, true ); 

//Add custom header support.  To call in theme, add <img src="[php tag] header_image(); [close php]"> where desired.
//add_theme_support( 'custom-header' );

//Make the TinyMCE editor text look nice
add_editor_style();
//
//generic sidebar
require( get_template_directory() .'/inc/generic_sidebar.php' );
require( get_template_directory() .'/inc/news_sidebar.php' );
//require( get_template_directory() .'/inc/programs_sidebar.php' );

//all post types
//require( get_template_directory() .'/inc/cpt.php' ); //FOR SOME REASON THIS BREAKS EVERYTHING.  PASTING CONTENTS BELOW.  BUT WHY?
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
	      'show_in_nav_menus' => true,
	      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
	      )
	  );
	}

	//add multiple post thumbnail support
	if (class_exists('MultiPostThumbnails')) {
		new MultiPostThumbnails(
			array(
				'label' => 'Second image',
				'id' => 'second-image',
				'post_type' => 'program'
			)
		);
	}
	if (class_exists('MultiPostThumbnails')) {
		new MultiPostThumbnails(
			array(
				'label' => 'Third image',
				'id' => 'third-image',
				'post_type' => 'program'
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

//front slide meta boxes
//require( get_template_directory() .'/inc/front_slide_meta_box.php' );

?>
