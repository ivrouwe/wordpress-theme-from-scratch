<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<header role="banner">
		<h1>Teamwork<b>.</b></h1>

		<p><a href="#main" class="visually-hidden-skip-link">Skip To Main Content</a></p>

		<p><a href="#search-the-website">Skip To Search</a></p>

		<nav id="major-navigation" aria-labelledby="major-navigation-heading" role="navigation">
			<h2 id="major-navigation-heading"><span class="visually-hidden">Major Navigation</span></h2>

		</nav>
	</header>

	<?php

	get_sidebar('search-the-website');
	get_sidebar('are-you-seeking-a-job-opportunity');
	get_sidebar('interested-in-hiring-us');