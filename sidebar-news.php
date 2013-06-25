<aside id="sidebar" class="large-4 columns">
	<?php if( is_active_sidebar( 'news') ) : ?>
		<ul class="sidebar">
			<?php dynamic_sidebar( 'news' ); ?>
		</ul>
	<?php endif; ?>
</aside>
