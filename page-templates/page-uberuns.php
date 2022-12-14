<?php
/**
 * Template Name: Uber Uns Page Template
 */

get_header();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/uberuns/section', 'intro' );
	get_template_part( 'template-parts/uberuns/section', 'about' );
	get_template_part( 'template-parts/uberuns/section', 'philosophie' );
	get_template_part( 'template-parts/uberuns/section', 'jobs' );
	do_action( 'after_main_content' );
get_footer();
