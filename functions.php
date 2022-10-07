<?php
/**
 * Setup theme
 */
function brn_theme_setup() {

	register_nav_menus(
		array(
			'main' => __( 'Main Menu', 'brentabau' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

}

add_action( 'after_setup_theme', 'brn_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function brn_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}
add_action( 'widgets_init', 'brn_theme_footer_widgets_init' );

/**
 * Get font face styles.
 */
function brn_get_font_face_styles() {

	return "
	@font-face {
		font-family:'nimbus-sans';
		src:url('https://use.typekit.net/af/da0c19/00000000000000000001518d/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff2'),url('https://use.typekit.net/af/da0c19/00000000000000000001518d/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff'),url('https://use.typekit.net/af/da0c19/00000000000000000001518d/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('opentype');
		font-display:auto;font-style:normal;font-weight:400;font-stretch:normal;
		}
	@font-face {
		font-family:'industry';
		src:url('https://use.typekit.net/af/44c438/00000000000000007735a64e/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff2'),url('https://use.typekit.net/af/44c438/00000000000000007735a64e/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff'),url('https://use.typekit.net/af/44c438/00000000000000007735a64e/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('opentype');
		font-display:auto;font-style:normal;font-weight:700;font-stretch:normal;
		}
	";

}

/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
    if ( is_single() ) {
        global $post;
        foreach ( ( get_the_category( $post->ID ) ) as $category ) {
            $classes[] = $category->category_nicename;
        }
    }
    return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */
function brn_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
	if ( is_page_template( array( 'page-templates/page-home.php', 'page-templates/page-contact.php' ) ) ) :
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0', array(), $theme_version, true );
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
	endif;
}

add_action( 'wp_enqueue_scripts', 'brn_theme_enqueue_styles' );

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';
