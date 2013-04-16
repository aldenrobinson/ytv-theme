<?php wp_enqueue_script('orbit'); ?>
<ul id="featured" data-orbit>
	<?php 
		$args = array( 'post_type' => 'highlight');
		$highlightquery = new WP_Query ($args);
		while ( $highlightquery->have_posts() ) : $highlightquery->the_post();
	?>

		<li data-orbit-slide="highlightslide-<?php the_ID(); ?>">
			<h5><?php the_title(); ?></h5>
			<?php the_post_thumbnail('highlightslide'); ?>
			<?php the_content(); ?>
		</li>

	<?php endwhile; ?>
</ul>
