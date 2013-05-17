<?php get_header(); ?>
	<div class="row">
		<div class="large-12 columns" id="content">
			<div class="row">
				<div id="featured-news" class="large-12 columns">
					<a href="<?php bloginfo('url'); ?>/category/news/announcements/"><h6>Announcements</h6></a>
					<?php 
						$args = array( 'category_name' => 'announcements', 'posts_per_page' => 1 );
						$announcementsquery = new WP_Query($args);
						while ($announcementsquery->have_posts()) : $announcementsquery->the_post();
						global $more;
						$more = 0;
						$date = get_the_date();
					?>
						<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
						<time datetime="<?php echo date( 'Y-m-d', strtotime($date) ); ?>" pubdate><?php echo $date; ?></time>
						<article>
							<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="row">
				<div id="news-feeds" class="large-12 columns">
					<ul class="large-block-grid-3">
						<li>
							<a href="<?php bloginfo('url'); ?>/category/news/performances/"><h6>Performances</h6></a>
							<?php 
								$args = array( 'category_name' => 'performances', 'posts_per_page' => 1 );
								$performancesquery = new WP_Query($args);
								while ($performancesquery->have_posts()) : $performancesquery->the_post();
								global $more;
								$more = 0;
								$date = get_the_date();
							?>
								<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
								<time datetime="<?php echo date( 'Y-m-d', strtotime($date) ); ?>" pubdate><?php echo $date; ?></time>
								<article>
									<?php the_content(); ?>
								</article>
							<?php endwhile; ?>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/category/news/classes/"><h6>Classes</h6></a>
							<?php 
								$args = array( 'category_name' => 'classes', 'posts_per_page' => 1 );
								$classesquery = new WP_Query($args);
								while ($classesquery->have_posts()) : $classesquery->the_post();
								global $more;
								$more = 0;
								$date = get_the_date();
							?>
								<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
								<time datetime="<?php echo date( 'Y-m-d', strtotime($date) ); ?>" pubdate><?php echo $date; ?></time>
								<article>
									<?php the_content(); ?>
								</article>
							<?php endwhile; ?>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/category/news/stories/"><h6>Stories</h6></a>
							<?php 
								$args = array( 'category_name' => 'announcements', 'posts_per_page' => 1 );
								$storiesquery = new WP_Query($args);
								while ($storiesquery->have_posts()) : $storiesquery->the_post();
								global $more;
								$more = 0;
								$date = get_the_date();
							?>
								<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
								<time datetime="<?php echo date( 'Y-m-d', strtotime($date) ); ?>" pubdate><?php echo $date; ?></time>
								<article>
									<?php the_content(); ?>
								</article>
							<?php endwhile; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
