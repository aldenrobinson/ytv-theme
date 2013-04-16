<h6>Coming Soon</h6>
<?php
	global $post;
	$args = array( 'numberposts' => 1, 'category' => 5 );
	$comingsoonposts = get_posts( $args );
	foreach( $comingsoonposts as $post ) : setup_postdata($post); 
?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		<?php the_content(); ?>
<?php endforeach; ?>
