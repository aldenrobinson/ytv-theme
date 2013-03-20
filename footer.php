<!--footer.php-->
	<footer>
		<div id="stripes">
			<div class="stripe" id="blue">&nbsp;</div>
			<div class="stripe" id="red">&nbsp;</div>
			<div class="stripe" id="green">&nbsp;</div>
		</div>
		<nav>
			<?php wp_nav_menu('footer'); ?>
		</nav>
		<p>Copyright &copy; 2013 Tom Whitehead.  All rights reserved.  Illustrations by <a href="http://michaelconnorillustration.com/">Michael Connor</a>.  Site by <a href="http://aldenrobinson.net">Alden Robinson</a>.</p>
		<a href="#" class="secondary small button" data-reveal-id="contact-popup">Contact Tom</a>
	</footer>
	<div id="contact-popup" class="reveal-modal">
		<h5>Contact Tom Whitehead</h5>
		<?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]');  ?>
		<a class="close-reveal-modal">&#215;</a>
	</div>
<?php wp_footer(); ?>
</body>
</html>
