<header id="main-header" class="main-header" itemscope itemtype="http://schema.org/WebSite">
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