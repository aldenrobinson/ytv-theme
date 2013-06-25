<?php wp_enqueue_script('section'); ?>
<div class="section-container auto" data-section data-options="deep_linking: true">
	<section class="eventtab">
		<p class="title" data-section-title><a href="#concerts">Concerts</a></p>
		<div class="content equal_height" data-section-content data-slug="concerts">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 19 
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
			<a class="jump" href="#">See all &raquo;</a>
		</div>
	</section>
	<section class="eventtab" id="festivals">
		<p class="title" data-section-title><a href="#festivals">Festivals</a></p>
		<div class="content equal_height" data-section-content data-slug="festivals">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 22
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<section class="eventtab"> 
		<p class="title" data-section-title><a href="#dances">Dances</a></p>
		<div class="content equal_height" data-section-content data-slug="dances">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 20 
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<section class="eventtab">
		<p class="title" data-section-title><a href="#sessions">Sessions &amp; Jams</a></p>
		<div class="content equal_height" data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 30
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h5><?php echo $event->output('#_EVENTLINK') ?></h5>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
</div><!--section container--> 
