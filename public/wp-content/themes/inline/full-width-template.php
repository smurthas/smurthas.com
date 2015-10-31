<?php 
/*
 *
 * Template Name: Full Width
 * Single Post Template: Full Width
 * This is the full-width.php file for the inLine WordPress theme.
 * DO NOT EDIT THIS FILE! IT WILL BE OVERRIDEN WITH FUTURE UPDATES.
 * If you need to edit the core theme, please make a child theme instead.
 *
 */
 
remove_action( 'inline_sidebar', 'inline_sidebar_structure_start' );
remove_action( 'inline_sidebar', 'inline_do_sidebar' );
remove_action( 'inline_sidebar', 'inline_sidebar_structure_end' );
add_action( 'the_post', 'inline_post_content_helper' );

inline();