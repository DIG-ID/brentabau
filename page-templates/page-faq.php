<?php
/**
 * Template Name: FAQ Page Template
 */

get_header();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/faq/section', 'intro' );
	get_template_part( 'template-parts/faq/section', 'accordion' );
	do_action( 'after_main_content' );
get_footer();
