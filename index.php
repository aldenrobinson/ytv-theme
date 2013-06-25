<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<?php 
					get_template_part('loop', 'index');
					if (in_category('news')) {
						get_sidebar('news');
					} else {
						get_sidebar('generic');
					}
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
