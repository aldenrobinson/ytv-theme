<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="http://tomwhiteheadmusic.com/favicon.ico" />

<title>
	<?php wp_title(); ?>
</title>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header class="siteheader">
		<hgroup>
			<h1><a href="<?php bloginfo('url'); ?>">Tom Whitehead</a></h1>
			<h2>American roots music on piano, accordion & guitar</h2>
		</hgroup>
	</header>
	<?php 
		if ( is_front_page()) {
			get_template_part('nav-front');
		}
	       	else {
			get_template_part('nav');
		}; 
	?>
