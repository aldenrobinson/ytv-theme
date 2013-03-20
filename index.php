<?php get_header(); ?>
	<div id="inside">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header class="pageheader">
				<hgroup>
					<h3><?php the_title(); ?></h3>
				</hgroup>
			</header>
			<div class="row" id="pagecontent">
				<article>
					<?php if ( 'appearance' == get_post_type() ) {
						$date = get_post_meta( $post->ID, 'custom_date', true );
						$time = get_post_meta( $post->ID, 'custom_time', true );
						$tickets = get_post_meta( $post->ID, 'custom_tickets', true );
						echo '<p>'.date( 'F j, Y', strtotime($date) ).'</p>';
						echo '<p>'.$time.'</p>';
						echo '<p>Tickets: '.$tickets.'</p>';
					} ?>
					<?php the_content(); ?>
				</article>
				<?php get_sidebar('generic'); ?>
			</div>
		<?php endwhile; else: ?>
		<?php _e('Sorry, there is nothing to display.'); ?>
		<?php endif; ?>
	</div><!--inside--> 
<?php get_footer(); ?>
