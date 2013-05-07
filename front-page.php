<?php get_header(); ?>

<div class="row">
	<div id="highlights" class="large-12 columns">
		<?php get_template_part('loop', 'highlights'); ?>
	</div><!--soon-->
</div><!--first front-page.php row-->

<div class="row">
	<div class="large-5 columns news-events panel">
		<div class="front-news">
			<?php get_template_part('loop', 'latestnews'); ?>
		</div><!--div.front-news-->
		<hr class="front-sep">
		<div class="front-major-event">
			<?php get_template_part('loop', 'frontprogram'); ?>
		</div><!--div.front-major-event-->
	</div><!--div.news-events-->
	<div class="large-7 columns events-and-video">
		<?php get_template_part('frontcalendar'); ?>
		<?php get_template_part('frontvideo'); ?>
	</div><!--events and video-->
</div><!--second front-page.php row-->

<?php get_footer(); ?>
