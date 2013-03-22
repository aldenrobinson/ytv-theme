<!--footer.php-->
			<footer>
				<nav>
					<?php wp_nav_menu('footer'); ?>
				</nav>
				<p>Copyright &copy; 2013.  Site by <a href="http://aldenrobinson.net">Alden Robinson</a>.</p>
				<a href="#" class="secondary small button" data-reveal-id="contact-popup">Contact Us</a>
			</footer>
		</div><!--container twelve colums-->
	</div><!--outer row-->

<!--hidden-->
	<div id="contact-popup" class="reveal-modal">
		<h5>Contact Us</h5>
		<?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]');  ?>
		<a class="close-reveal-modal">&#215;</a>
	</div>
<?php wp_footer(); ?>
</body>
</html>
