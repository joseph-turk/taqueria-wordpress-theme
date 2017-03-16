<?php
/**
 * Template Name: Menu Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taqueria
 */

get_header();

	wp_nav_menu( array(
		'theme_location' => 'menu-2',
		'depth' => 2,
		'menu_id' => 'secondary-menu',
		'menu_class' => 'nav nav-pills'
	) );

while ( have_posts() ) : the_post();
	the_content();
endwhile;

get_footer();
