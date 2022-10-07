<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	get_template_part( 'template-parts/home/section', 'intro' );
	get_template_part( 'template-parts/home/section', 'leistungen' );
	get_template_part( 'template-parts/home/section', 'projekte' );
	get_template_part( 'template-parts/home/section', 'uberuns' );
	get_template_part( 'template-parts/home/section', 'partnersmap' );
get_footer(); ?>