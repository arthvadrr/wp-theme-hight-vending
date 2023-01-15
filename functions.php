<?php

/**
 * Hight Vending functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hight_Vending
 */

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function hight_vending_setup()
{
	load_theme_textdomain('hight-vending', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'hight-vending'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'hight_vending_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'hight_vending_setup');

function hight_vending_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hight_vending_content_width', 640);
}
add_action('after_setup_theme', 'hight_vending_content_width', 0);

function hight_vending_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'hight-vending'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'hight-vending'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'hight_vending_widgets_init');

function hight_vending_scripts()
{
	wp_enqueue_style('hight-vending-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION);

	wp_enqueue_script('hight-vending-navigation', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'hight_vending_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
