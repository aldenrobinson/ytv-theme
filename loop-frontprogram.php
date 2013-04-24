<h6>Programs</h6>
<?php
	global $post;
	$args = array( 'numberposts' => 1, 'category' => 7 );
	$programs = get_posts( $args ); 
	foreach( $programs as $post ) : setup_postdata($post); 
?>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	<?php the_content(); ?>
<?php endforeach; ?>
