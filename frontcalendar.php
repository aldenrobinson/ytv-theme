<div class="row">
	<div class="large-8 columns">
		<h4><a href="<?php bloginfo('url'); ?>/events">Calendar of Events</a></h4>
		<p>This is your gateway to folk, traditional and roots music and dance events in Burlington and surrounding communities.  Click the calendar icon for a complete listing.  Join our mailing list for weekly updates.</p>
	</div>
	<div class="large-4 columns">
		<a href="<?php bloginfo('url'); ?>/events"><img src="<?php bloginfo('template_directory'); ?>/images/cal_icon.png" /></a><br /><br />
	</div>
</div>
<div class="row">
	<div class="large-12 columns front-calendar">
		<?php wp_enqueue_script('section'); ?>
	 	<div class="section-container auto" data-section>
			<section id="concerts">
				<p class="title" data-section-title><a href="#panel1">Concerts</a></p>
				<div class="content" data-section-content>
					<?php 
						$events = EM_Events::get(array(
							'orderby' => event_start_date,
							'category' => 18
						));
						foreach ( $events as $event ) {
					?>
						<div class="event">
							<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
							<a href="<?php the_permalink(); ?>"><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></a>
						</div>
					<?php } ?>
				</div>
			</section>
			<section id="festivals">
				<p class="title" data-section-title><a href="#panel1">Festivals</a></p>
				<div class="content" data-section-content>
					<?php 
						$events = EM_Events::get(array(
							'orderby' => event_start_date,
							'category' => 18
						));
						foreach ( $events as $event ) {
					?>
						<div class="event">
							<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
							<a href="<?php the_permalink(); ?>"><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></a>
						</div>
					<?php } ?>
				</div>
			</section>
			<section id="dances">
				<p class="title" data-section-title><a href="#panel2">Dances</a></p>
				<div class="content" data-section-content>
					<?php 
						$events = EM_Events::get(array(
							'orderby' => event_start_date,
							'category' => 18
						));
						foreach ( $events as $event ) {
					?>
						<div class="event">
							<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
							<a href="<?php the_permalink(); ?>"><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></a>
						</div>
					<?php } ?>
				</div>
			</section>
			<section id="sessions">
				<p class="title" data-section-title><a href="#panel3">Sessions &amp; Jams</a></p>
				<div class="content" data-section-content>
					<?php 
						$events = EM_Events::get(array(
							'orderby' => event_start_date,
							'category' => 18
						));
						foreach ( $events as $event ) {
					?>
						<div class="event">
							<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
							<a href="<?php the_permalink(); ?>"><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></a>
						</div>
					<?php } ?>
				</div>
			</section>
		</div><!--section container--> 
	</div><!--end 12col front cal-->
</div><!--end first inside row-->
