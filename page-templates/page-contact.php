<?php
/**
 * Template Name: Kontakt Lage Page Template
 */

get_header();
  do_action( 'before_main_content' );
  get_template_part( 'template-parts/contact/section', 'intro' );
  get_template_part( 'template-parts/contact/section', 'form-map' );
  do_action( 'after_main_content' );
get_footer();
