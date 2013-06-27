<aside id="sidebar" class="large-4 columns">
	<div id="event-submit"> 
		<h4>Submit an event</h4>
		<p>Got an event to list here? Give us the details.</p>
		<a class="button" data-reveal-id="event-submit-popup" href="#">Submit your event</a>
	</div>
	<?php if( is_active_sidebar( 'events') ) : ?>
		<ul class="sidebar">
			<?php dynamic_sidebar( 'events' ); ?>
		</ul>
	<?php endif; ?>
</aside>
