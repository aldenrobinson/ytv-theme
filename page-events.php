<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<div class="large-12.columns events-tabset">
					<?php 
						get_template_part('loop', 'events');
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
