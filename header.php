<?php

/**
 * The header for the theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hight_Vending
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'hight-vending'); ?></a>

		<header id="masthead" class="site-header content-container">
			<!-- <div class="site-branding content-width">
				<?php the_custom_logo(); ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				$hight_vending_description = get_bloginfo('description', 'display');
				if ($hight_vending_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $hight_vending_description; ?></p>
				<?php endif; ?> -->
	</div>
	</header>