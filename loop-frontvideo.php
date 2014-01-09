<?php 
	$videoargs = array(
		'post_type' => 'video',
		'posts_per_page' => 1
	);
	$videoquery = new WP_Query ($videoargs);
	while ( $videoquery->have_posts() ) : $videoquery->the_post();
	$post_meta_data = get_post_custom($post->ID); 
?>

	<!--<div class="flex-video">
		<?php echo apply_filters('the_content', $post_meta_data['video_iframecode'][0]);  ?>
	</div> -->
	<div class="video-caption"><?php the_content(); ?></div>

<?php endwhile; ?>
