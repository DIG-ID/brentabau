<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
		do_action( 'wp_body_open' );
		if ( is_front_page( ) ) :
			get_template_part( 'template-parts/main', 'header' );
		else :
			get_template_part( 'template-parts/page', 'header' );
		endif;
		?>
