<?php
/**
 * Default page template: used for text pages such as Impressum and Datenschutz.
 */

get_header();
	do_action( 'before_main_content' );
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/page/section', 'intro' );
		get_template_part( 'template-parts/page/section', 'content' );
	endwhile;
	do_action( 'after_main_content' );
get_footer();
