<?php
get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/single-services/section', 'intro' );
	get_template_part( 'template-parts/single-services/section', 'gallery' );
	get_template_part( 'template-parts/single-services/section', 'related' );
do_action( 'after_main_content' );
get_footer();
