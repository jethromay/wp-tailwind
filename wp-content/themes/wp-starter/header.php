<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>"/>
	<meta itemprop="url" content="<?php echo esc_url( home_url( '/' ) ); ?>"/>

	<link href="http://gmpg.org/xfn/11" rel="profile"/>
	<link href="<?php bloginfo( 'pingback_url' ); ?>" rel="pingback"/>

	<title></title>

	<!-- Favicons -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/Blog">

	<?php get_component( 'header/header' ); ?>

	<main id="main" role="main">
