<div class="row">
	<div id="programsbanner" class="large-12 columns banner-slideshow">
		<?php wp_enqueue_script('orbit'); ?>
		<ul id="programs-orbit" data-orbit>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><?php the_post_thumbnail(); ?></li>
			<li><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail('program', 'second-image'); endif; ?></li>
			<li><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail('program', 'third-image'); endif; ?></li>
		<?php endwhile; endif; ?>
		</ul>
	</div>
</div>
