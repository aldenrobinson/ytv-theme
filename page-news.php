<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<ul class="large-block-grid-3">
				<li>
					<h6>Announcements</h6>
					<?php 
						$args = array( 'category_name' => 'announcements', 'posts_per_page' => 1 );
						$announcementsquery = new WP_Query($args);
						while ($announcementsquery->have_posts()) : $announcementsquery->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</li>
				<li>
					<h6>Performances</h6>
					<?php 
						$args = array( 'category_name' => 'performances', 'posts_per_page' => 1 );
						$performancesquery = new WP_Query($args);
						while ($performancesquery->have_posts()) : $performancesquery->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</li>
				<li>
					<h6>Classes</h6>
					<?php 
						$args = array( 'category_name' => 'classes', 'posts_per_page' => 1 );
						$classesquery = new WP_Query($args);
						while ($classesquery->have_posts()) : $classesquery->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</li>
				<li>
					<h6>Stories</h6>
					<?php 
						$args = array( 'category_name' => 'announcements', 'posts_per_page' => 1 );
						$storiesquery = new WP_Query($args);
						while ($storiesquery->have_posts()) : $storiesquery->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</li>
			</ul>
		</div>
	</div>
<?php get_footer(); ?>
