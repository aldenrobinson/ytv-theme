<?php wp_enqueue_script('section'); ?>
<div class="section-container auto" data-section>
	<section class="eventtab" id="concerts">
		<p class="title" data-section-title><a href="#panel1">Concerts</a></p>
		<div class="content" data-section-content>
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 18 
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
			<a class="jump" href="#">See all &raquo;</a>
		</div>
	</section>
	<section class="eventtab" id="festivals">
		<p class="title" data-section-title><a href="#panel1">Festivals</a></p>
		<div class="content" data-section-content>
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 21
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<section class="eventtab" id="dances">
		<p class="title" data-section-title><a href="#panel2">Dances</a></p>
		<div class="content" data-section-content>
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 19
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<section class="eventtab" id="sessions">
		<p class="title" data-section-title><a href="#panel3">Sessions &amp; Jams</a></p>
		<div class="content" data-section-content>
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 20
					));
					foreach ( $events as $event ) {
				?>
					<li>
						<h6><?php echo $event->output('#_EVENTLINK') ?></h6>
						<p><?php echo $event->output('#_EVENTDATES') ?> @ <?php echo $event->output('#_LOCATIONNAME') ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>
	</section>
</div><!--section container--> 
