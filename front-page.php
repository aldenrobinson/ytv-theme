<?php get_header(); ?>

<div class="row">
	<div id="highlights" class="large-12 columns banner-slideshow">
		<?php get_template_part('loop', 'highlights'); ?>
	</div><!--soon-->
</div><!--first front-page.php row-->

<div class="row">
	<div id="content" class="small-12 columns">
		<div class="row">
			<div id="news-programs" class="large-5 columns">
				<div id="front-news">
					<?php get_template_part('loop', 'latestnews'); ?>
				</div><!--div.front-news-->
				<div id="front-program">
					<?php get_template_part('loop', 'frontprogram'); ?>
				</div><!--div.front-major-event-->
			</div><!--div.news-events-->
			<div id="events-video" class="large-7 columns">
				<?php get_template_part('frontcalendar'); ?>
				<?php get_template_part('frontvideo'); ?>
			</div><!--events and video-->
		</div><!--second front-page.php row-->
	</div>
</div>

<?php get_footer(); ?>
