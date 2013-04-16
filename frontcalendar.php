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
			  <dl class="tabs contained mobile five-up">
				  <dd><a href="#cal-concerts" class="active">Concerts</a></dd>
				 <dd><a href="#cal-festivals">Festivals</a></dd>
				  <dd><a href="#cal-dances">Dances</a></dd>
				  <dd><a href="#cal-sessions">Sessions</a></dd>
				  <dd><a href="#cal-classes">Classes</a></dd>
				  <!--<dd><a href="#cal-media">Media</a></dd>-->
				  <!--<dd><a href="#cal-families">Families</a></dd>-->
			  </dl>
			  
			  <ul class="tabs-content contained mobile">
				  <li class="active" id="cal-concertsTab">
					  <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="1" type="list"]'); ?>
					  </table>
					<a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-concerts">More concerts...</a>	  
				  </li>
				  <li id="cal-festivalsTab">
					   <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="3" type="list"]'); ?>
					  </table>
					  <a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-festivals">More festivals...</a>
				  </li>
				  <li id="cal-dancesTab">
					  <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="2" type="list"]'); ?>
					  </table>
					  <a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-dances">More dances...</a>
				  </li>
				  <li id="cal-sessionsTab">
					  <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="4" type="list"]'); ?>
					  </table>
					  <a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-sessions">More sessions...</a>
				   </li>
				  <li id="cal-classesTab">
					  <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							<th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="13" type="list"]'); ?>
					  </table>
					  <a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-classes">More classes...</a>
				   </li>
				    <li id="cal-mediaTab">
					  <table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="11" type="list"]'); ?>
					  </table>
					  <a class="more-calendar" href="http://youngtraditionvermont.org/events/#cal-media">More listings...</a>
				   </li>
				  <!--<li id="cal-familiesTab">
					<table class="front-schedule">
						  <tr>
							  <th>Date</th>
							  <th>Event</th>
							  <th>Location</th>
						 <?php echo do_shortcode('[google-calendar-events id="5" type="list"]'); ?>
					 </table>
				  </li>-->
			  </ul>
			  
			  
	  </div><!--end 12col front cal-->
  </div><!--end first inside row-->
