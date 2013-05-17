<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<?php get_template_part('loop', 'index'); ?>
				<aside id="event-submit" class="large-4 columns">
					<h4>Submit an event</h4>
					<p>Got an event to list here? Give us the details.</p>
					<a class="button" data-reveal-id="event-submit-popup" href="#">Submit your event</a>
				</aside>
			</div>
			<div class="row">
				<div class="large-12.columns events-tabset">
					<?php 
						get_template_part('loop', 'events');
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
