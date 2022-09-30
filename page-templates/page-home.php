<?php
/**
 * Template Name: Home Page Template
 */

get_header(); 
do_action( 'before_main_content' );
	get_template_part( 'template-parts/home/section', 'intro' );
	get_template_part( 'template-parts/home/section', 'leistungen' );
	get_template_part( 'template-parts/home/section', 'projekte' );
	get_template_part( 'template-parts/home/section', 'uberuns' );
	get_template_part( 'template-parts/home/section', 'partnersmap' );
do_action( 'after_main_content' );
get_footer(); ?>