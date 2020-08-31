<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

	<!-- header area -->
	<header class="site-header" id="site-header">
		<div class="header-wrapper">
			<div class="site-logo"><?php echo get_custom_logo();?></div>
			<div class="header-search"></div>
			<div class="header-right"></div>
		</div>
	</header>
	<!-- header area ends -->

	<!-- Output the menu . -->
	<?php get_template_part( 'template-parts/menu' ); ?>
	<!-- Output the menu ends -->

