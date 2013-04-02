<?php
	wp_enqueue_script('app');
	wp_enqueue_script('foundation'); 
	wp_enqueue_script('reveal'); 
?>
<?php rewind_posts(); ?>
<?php while( have_posts() ) : the_post(); ?>
	
	<div id="gallery-reveal-modal-<?php the_ID(); ?>" class="reveal-modal gallery-popup">
		<header class="print-only">
			<h4>ARTIST NAME</h4>
		</header>
		<h6><?php the_title(); ?></h6>
		<span class="subtitle">
			<?php //This was a custom field to get a second line below the painting title.  Another way to do this might be to use the attachment catpion/description fields.  It probably can be deleted for a lot of things.
				$sub_title = get_post_meta( $post->ID, 'sub-title', true ); 
				echo $sub_title;
			?>
		</span><br /><br />
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<form>
			<input class="small radius secondary button hide-on-print" type="button" value="Print this page" onClick="window.print()">
		</form>
		<a class="close-reveal-modal hide-on-print">&#215;</a>
	</div>

<?php endwhile; ?>
