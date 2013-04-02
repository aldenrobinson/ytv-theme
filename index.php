<?php get_header(); ?>
	<div class="row">
		<?php //Load the image popups if a gallery page.
			//if ( is_post_type_archive() ) {
				get_template_part('loop', 'gallery');
		//	} else { //Otherwise get the normal Main content area/sidebar combination.
		//		get_template_part('loop', 'index');
		//		get_sidebar('generic');
		//	}
		?>
	</div>
<?php get_footer(); ?>
