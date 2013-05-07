<?php wp_enqueue_script('orbit'); ?>
<ul id="highlights" data-orbit>
	<?php 
		$events = EM_Events::get(array(
			'orderby' => event_star_date,
			'category' => 18
		));
		foreach ( $events as $event ) {
	?>

		<li data-orbit-slide="highlightslide-<?php the_ID(); ?>">
			<?php echo $event->output('#_EVENTIMAGE') ?>
			<div class="slidecaption">
				<div class="slidetitle"><h5><?php echo $event->output('#_EVENTNAME') ?>
</h5></div>
				<div class="slidedetails">
					<p><?php echo $event->output('#_EVENTDATES') ?></p>
					<p><?php echo $event->output('#_LOCATIONNAME') ?></p>
				</div>
			</div>
		</li>
	<?php } ?>

</ul>
