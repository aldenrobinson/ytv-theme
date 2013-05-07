<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scaleable=no" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />

<title>
	<?php wp_title(); ?>
</title>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php get_template_part('nav'); ?>

	<div class="mountain-bg">

	<div class="row">
		<header id="siteheader">
			<div class="row">

				<div id="banner">
				  <a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
				  <h5><?php bloginfo('description'); ?></h5>
				</div>

				<div id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/random/rotate.php?=1234" /></a></div>
				
			</div>
		</header>
	</div>

	<div class="row">
		<div id="wrapper" class="large-12 columns">
