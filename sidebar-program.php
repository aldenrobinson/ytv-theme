<aside id="sidebar" class="large-4 columns">
	<header>
		<h4>Latest News</h4>
	</header>
	<ul>
		<?php 
			if ( is_single ('trad-camp') ) { $cat = "trad-camp"; }
			elseif ( is_single ('young-tradition-weekend') ) { $cat = "young-tradition-weekend"; }
			elseif ( is_single ('fiddleheads') ) { $cat = "fiddleheads"; }
			elseif ( is_single ('tom-sustic-fund') ) { $cat = "tom-sustic-fund"; }
			elseif ( is_single ('instrument-petting-zoo') ) { $cat = "petting-zoo"; }
			
			$programsideargs = array ( 
				'category_name' => $cat,
				'posts_per_page' => 3,
				'orderby' => DATE,
				'order' => 'DESC'
			);

			$programsidequery = new WP_Query($programsideargs);
			while ( $programsidequery -> have_posts() ) : $programsidequery->the_post(); 
			global $more;
			$more = 0;
		?>
			<li>
				<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
				<?php the_content(); ?>
			</li>
		<?php 
			endwhile;  
		?>
	</ul>
</aside>
