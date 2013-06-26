<?php wp_enqueue_script('orbit'); ?>
<ul id="highlights-orbit" data-orbit>
	<?php 
		$events = EM_Events::get(array(
			'orderby' => event_start_date,
			'category' => 103 
		));
		foreach ( $events as $event ) {
	?>

		<li data-orbit-slide="highlightslide-<?php the_ID(); ?>">
			<?php echo $event->output('#_EVENTIMAGE') ?>
			<div class="slidecaption">
				<h5><?php echo $event->output('#_EVENTLINK') ?> </h5>
				<a href="<?php the_permalink(); ?>"><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></a>
			</div>
		</li>
	<?php } ?>

</ul>
