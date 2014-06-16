<div class="row">
	<div class="large-8 columns">
		<h4><a href="<?php bloginfo('url'); ?>/events">Calendar of Events</a></h4>
		<p>This is your gateway to folk, traditional and roots music and dance events in Burlington and surrounding communities.  Click the calendar icon for a complete listing. </p>
	</div>
	<div class="large-4 columns">
		<a href="<?php bloginfo('url'); ?>/events"><img src="<?php bloginfo('template_directory'); ?>/images/cal_icon.png" /></a><br /><br />
	</div>
</div>
<div class="row">
	<div class="large-12 columns front-calendar">
		<?php wp_enqueue_script('section'); ?>
	 	<div class="section-container auto" data-section>
			<section class="eventtab" id="concerts">
				<p class="title" data-section-title><a href="#panel0">Concerts</a></p>
				<div class="content equal_height" data-section-content>
					<ul>
						<?php 
							$events = EM_Events::get(array(
								'orderby' => event_start_date,
								'category' => 19, 
								'limit' => 10,
								'pagination' => 1
							));
							foreach ( $events as $event ) {
						?>
							<li>
								<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
								<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
							</li>
						<?php } ?>
					</ul>
					<a class="jump" href="events/#concerts">See all &raquo;</a>
				</div>
			</section>
			<section class="eventtab" id="festivals">
				<p class="title" data-section-title><a href="#panel1">Festivals</a></p>
				<div class="content equal_height" data-section-content>
					<ul>
						<?php 
							$events = EM_Events::get(array(
								'orderby' => event_start_date,
								'category' => 22,
								'limit' => 10,
								'pagination' => 1
							));
							foreach ( $events as $event ) {
						?>
							<li>
								<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
								<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
							</li>
						<?php } ?>
					</ul>
					<a class="jump" href="events/#festivals">See all &raquo;</a>
				</div>
			</section>
			<section class="eventtab" id="dances">
				<p class="title" data-section-title><a href="#panel2">Dances</a></p>
				<div class="content equal_height" data-section-content> 
					<ul>
						<?php 
							$events = EM_Events::get(array(
								'orderby' => event_start_date,
								'category' => 20,
								'limit' => 10,
								'pagination' => 1
							));
							foreach ( $events as $event ) {
						?>
							<li>
								<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
								<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
							</li>
						<?php } ?>
					</ul>
					<a class="jump" href="events/#dances">See all &raquo;</a>
				</div>
			</section>
			<section class="eventtab" id="sessions">
				<p class="title" data-section-title><a href="#panel3">Sessions &amp; Jams</a></p>
				<div class="content equal_height" data-section-content>
					<ul>
						<?php 
							$events = EM_Events::get(array(
								'orderby' => event_start_date,
								'category' => 30,
								'limit' => 10,
								'pagination' => 1
							));
							foreach ( $events as $event ) {
						?>
							<li>
								<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
								<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
							</li>
						<?php } ?>
					</ul>
					<a class="jump" href="events/#sessions">See all &raquo;</a>
				</div>
			</section>
		</div><!--section container--> 
	</div><!--end 12col front cal-->
</div><!--end first inside row-->
