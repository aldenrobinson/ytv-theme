<section id="content">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		//Diplay the title of the page, unless it is the home page.
		if (! is_front_page() ) {
			echo '<h3>';
			the_title();
			echo '</h3>';
		}
		the_content();
		endwhile; else:
			echo 'Sorry, there is nothing to display.';
	endif; ?>
</section>
