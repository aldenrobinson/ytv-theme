<h6>Latest News</h6>
<?php
	global $post;
	$args = array( 'numberposts' => 2, 'category' => 6 );
	$frontnews = get_posts( $args ); 
	foreach( $frontnews as $post ) : setup_postdata($post); 
?>
	<div class="front-news-item">
		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<?php the_content(); ?>
	</div>
<?php endforeach; ?>
