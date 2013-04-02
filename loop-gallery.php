<section id="gallery">
	<ul class="gallery-grid">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<li>
				<a href="#" data-reveal-id="gallery-reveal-modal-<?php the_ID(); ?>" data-animation="fade">
					<?php the_post_thumbnail(); ?><br />
					<?php the_title(); ?><br />
					<?php
						$sub_title = get_post_meta( $post->ID, 'sub-title', true ); 
						if ($sub_title) {
							echo '<span class="subtitle">';
							echo $sub_title;
							echo '</span>';
						}
					?>
				</a>
			</li>
		<?php endwhile; else: ?>
		<?php _e('Sorry, there is nothing to display'); ?>
		<?php endif; ?>
	</ul>
</section>
