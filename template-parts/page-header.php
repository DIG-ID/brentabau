<header id="page-header" class="main-header page-header" itemscope itemtype="http://schema.org/WebSite">
	<div class="site-branding">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12">
					<?php
					if ( has_custom_logo() ) :
						?><div class="site-logo"><?php the_custom_logo(); ?></div><?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'brenta' ); ?>">
		<div class="custom-container">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
				)
			);
			?>
		</div>
	</nav>
</header>
