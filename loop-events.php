<?php wp_enqueue_script('section'); ?>
<div class="section-container auto" data-section data-options="deep_linking: true">
	<section class="eventtab">
		<p class="title" data-section-title><a href="#concerts">Concerts</a></p>
		<div class="content " data-section-content data-slug="concerts">
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
		</div>
	</section>
	<section class="eventtab" id="festivals">
		<p class="title" data-section-title><a href="#festivals">Festivals</a></p>
		<div class="content " data-section-content data-slug="festivals">
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
		<div class="content " data-section-content data-slug="dances">
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
		<div class="content " data-section-content data-slug="sessions">
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
	<section class="eventtab">
		<p class="title" data-section-title><a href="#sessions">Radio &amp; TV</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 24
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
		<p class="title" data-section-title><a href="#sessions">Workshops</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 26
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
		<p class="title" data-section-title><a href="#sessions">Singing</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 61
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
		<p class="title" data-section-title><a href="#sessions">Classes</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 14
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
		<p class="title" data-section-title><a href="#sessions">Camps</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 27
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
		<p class="title" data-section-title><a href="#sessions">Exhibits</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 21
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
		<p class="title" data-section-title><a href="#sessions">For families</a></p>
		<div class="content " data-section-content data-slug="sessions">
			<ul>
				<?php 
					$events = EM_Events::get(array(
						'orderby' => event_start_date,
						'category' => 29
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
