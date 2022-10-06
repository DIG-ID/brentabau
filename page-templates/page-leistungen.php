<?php
/**
 * Template Name: Leistungen Page Template
 */

get_header(); 
do_action( 'before_main_content' );
get_template_part( 'template-parts/leistungen/section', 'intro' );
get_template_part( 'template-parts/leistungen/section', 'services' );
get_template_part( 'template-parts/leistungen/section', 'kontakt' );
do_action( 'after_main_content' );
get_footer(); ?>