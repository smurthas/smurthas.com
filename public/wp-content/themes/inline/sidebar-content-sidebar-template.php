<?php 
/*
 *
 * Template Name: Sidebar Content Sidebar
 * Single Post Template: Sidebar Content Sidebar
 * This is the sidebar-content-sidebar.php file for the inLine WordPress theme.
 * DO NOT EDIT THIS FILE! IT WILL BE OVERRIDEN WITH FUTURE UPDATES.
 * If you need to edit the core theme, please make a child theme instead.
 *
 */

remove_action( 'inline_after_content', 'inline_main_sidebar' );
add_action( 'inline_before_content', 'inline_main_sidebar' );
add_action( 'inline_after_content', 'inline_alternate_sidebar' );
add_action( 'the_post', 'inline_post_content_helper' );

inline();