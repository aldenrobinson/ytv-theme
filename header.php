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

	<div class="mountain-bg">

	<div class="row">
		<header class="siteheader">
			<div class="row">

				<div class="large-10 columns banner">
				  <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				  <h5><?php bloginfo('description'); ?></h5>
				</div>

				<div class="large-2 columns hide-for-small logo-div"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/random/rotate.php?=1234" /></a></div>
				
			</div>
		</header>
	</div>

	<?php get_template_part('nav'); ?>

	<div class="row">
		<div class="twelve columns wrapper">
			<div class="row">
				<div class="large-11 columns centered body-content-area">
