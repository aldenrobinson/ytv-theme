<aside id="sidebar">
	<?php if( is_active_sidebar( 'generic') ) : ?>
		<ul class="sidebar">
			<?php dynamic_sidebar( 'generic' ); ?>
		</ul>
	<?php endif; ?>
</aside>
