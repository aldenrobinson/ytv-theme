<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<?php //Load the image popups if a gallery page.
					if ( is_tax('collection') ) {
						get_template_part('loop', 'gallery');
					} else { //Otherwise get the normal Main content area/sidebar combination.
						get_template_part('loop', 'index');
						get_sidebar('generic');
					}
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
