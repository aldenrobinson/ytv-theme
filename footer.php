<!--footer.php-->
			<footer>
				<nav>
					<?php wp_nav_menu('footer'); ?>
				</nav>
				<p>Copyright &copy; 2013.  Site by <a href="http://aldenrobinson.net">YOUR NAME HERE</a>.</p>
				<a href="#" class="secondary small button" data-reveal-id="contact-popup">Contact Us</a>
			</footer>
		</div><!--container twelve colums-->
	</div><!--outer row-->

<!--hidden-->
	<div id="contact-popup" class="reveal-modal">
		<h5>Contact Us</h5>
		<?php //Change this to the shortcode you get from the Contact Form 7 plugin.
			echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); 
		?>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<?php //Load the image popups if a gallery page.
		if( is_post_type_archive('artwork') ) {
		get_template_part('artwork_modal');
	} ?>
<?php wp_footer(); ?>
</body>
</html>
