<!--footer.php-->
		</div><!--end wrapper-->	
	</div><!-- end wrapper row -->
	<div class="row">
		<footer id="sitefooter">
			<nav>
				<?php wp_nav_menu( 
					array(
						'menu' => 'footer',
						'depth' => 1
					)
				); ?>
			</nav>
			<p>Copyright &copy; 2013.  Site by <a href="http://aldenrobinson.net">Alden Robinson</a>.</p>
			<a href="#" class="secondary small button" data-reveal-id="contact-popup">Contact Us</a>
		</footer>
	</div>
</div><!--end mountain bg-->


<!--hidden-->
	<div id="contact-popup" class="reveal-modal">
		<h5>Contact Us</h5>
		<?php //Change this to the shortcode you get from the Contact Form 7 plugin.
			echo do_shortcode('[contact-form-7 id="319" title="Contact Us Page Form"]'); 
		?>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<?php if ( is_page('events') ) { ?>
		<div id="event-submit-popup" class="reveal-modal">
			<h5>Submit an event</h5>
				<?php echo do_shortcode('[contact-form-7 id="321" title="Submit an Event"]'); ?>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
