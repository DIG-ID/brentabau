<?php
/**
 * Register theme customizer
 */

function brenta_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'brenta_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Brenta Theme Options', 'brenta' ),
			'description'    => __( 'Theme options for the Brenta Theme', 'brenta' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}
add_action( 'customize_register', 'brenta_theme_customizer_register' );