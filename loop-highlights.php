<?php wp_enqueue_script('orbit'); ?>
<ul id="highlights" data-orbit>
	<?php 

		$today = date("Y-m-d");
		$highlightsargs = array( 
			'post_type' => 'event',
			'event-categories' => 'highlights',
			'posts_per_page' => 5
			//'orderby' => 'meta_value', 
			//'meta_key' => 'event_start_date',
			//'order' => 'ASC',
			//'meta_query' => array(
				//array(
					//'key' => 'event_start_date',
					//'value' => $today,
					//'compare' => '>=',
					//'type' => 'DATE'
				//)
			//)
		);
		$highlightquery = new WP_Query ($highlightsargs);
		while ( $highlightquery->have_posts() ) : $highlightquery->the_post();
	?>

		<li data-orbit-slide="highlightslide-<?php the_ID(); ?>">
			<h5><?php the_title(); ?></h5>
			<?php the_post_thumbnail('highlightslide'); ?>
		</li>

	<?php endwhile; ?>
</ul>
