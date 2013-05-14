<?php get_header(); ?>
	<?php 
		$thumb = get_post_thumbnail_id();
		if ( $thumb ) { get_template_part('program-banner'); }
	?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<?php 
						get_template_part('loop', 'index');
						get_sidebar('program');
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
