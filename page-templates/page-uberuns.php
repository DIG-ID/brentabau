<?php
/**
 * Template Name: Uber Uns Page Template
 */

get_header();
	get_template_part( 'template-parts/uberuns/section', 'intro' );
	get_template_part( 'template-parts/uberuns/section', 'about' );
	get_template_part( 'template-parts/uberuns/section', 'philosophie' );
	get_template_part( 'template-parts/uberuns/section', 'jobs' );
get_footer(); ?>